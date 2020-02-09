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

/* home/index.html.twig */
class __TwigTemplate_9bb25002f848d245ccc9a131b664dad93ea4c90c1ff8267b85dd5564fb56a85f extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'keywords' => [$this, 'block_keywords'],
            'description' => [$this, 'block_description'],
            'slider' => [$this, 'block_slider'],
            'sidebar' => [$this, 'block_sidebar'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 5
        return "homebase.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("homebase.html.twig", "home/index.html.twig", 5);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello HomeController!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_keywords($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "keywords"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "keywords"));

        echo "Haaa!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_description($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "description"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "description"));

        echo "Hellfafa";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 11
    public function block_slider($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "slider"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "slider"));

        $this->loadTemplate("home/slider.html.twig", "home/index.html.twig", 11)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 12
    public function block_sidebar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        $this->loadTemplate("home/sidebar.html.twig", "home/index.html.twig", 12)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 15
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 16
        echo "    <div class=\"col-sm-9 padding-right\">
        <div class=\"features_items\"><!--features_items-->
            <h2 class=\"title text-center\">Features Items</h2>
            <div class=\"col-sm-4\">
                <div class=\"product-image-wrapper\">
                    <div class=\"single-products\">
                        <div class=\"productinfo text-center\">
                            <img src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/images/home/product1.jpg\" alt=\"\" />
                            <h2>\$56</h2>
                            <p>Easy Polo Black Edition</p>
                            <a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
                        </div>
                        <div class=\"product-overlay\">
                            <div class=\"overlay-content\">
                                <h2>\$56</h2>
                                <p>Easy Polo Black Edition</p>
                                <a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
                            </div>
                        </div>
                    </div>
                    <div class=\"choose\">
                        <ul class=\"nav nav-pills nav-justified\">
                            <li><a href=\"#\"><i class=\"fa fa-plus-square\"></i>Add to wishlist</a></li>
                            <li><a href=\"#\"><i class=\"fa fa-plus-square\"></i>Add to compare</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class=\"col-sm-4\">
                <div class=\"product-image-wrapper\">
                    <div class=\"single-products\">
                        <div class=\"productinfo text-center\">
                            <img src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/images/home/product2.jpg\" alt=\"\" />
                            <h2>\$56</h2>
                            <p>Easy Polo Black Edition</p>
                            <a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
                        </div>
                        <div class=\"product-overlay\">
                            <div class=\"overlay-content\">
                                <h2>\$56</h2>
                                <p>Easy Polo Black Edition</p>
                                <a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
                            </div>
                        </div>
                    </div>
                    <div class=\"choose\">
                        <ul class=\"nav nav-pills nav-justified\">
                            <li><a href=\"#\"><i class=\"fa fa-plus-square\"></i>Add to wishlist</a></li>
                            <li><a href=\"#\"><i class=\"fa fa-plus-square\"></i>Add to compare</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class=\"col-sm-4\">
                <div class=\"product-image-wrapper\">
                    <div class=\"single-products\">
                        <div class=\"productinfo text-center\">
                            <img src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/images/home/product3.jpg\" alt=\"\" />
                            <h2>\$56</h2>
                            <p>Easy Polo Black Edition</p>
                            <a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
                        </div>
                        <div class=\"product-overlay\">
                            <div class=\"overlay-content\">
                                <h2>\$56</h2>
                                <p>Easy Polo Black Edition</p>
                                <a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
                            </div>
                        </div>
                    </div>
                    <div class=\"choose\">
                        <ul class=\"nav nav-pills nav-justified\">
                            <li><a href=\"#\"><i class=\"fa fa-plus-square\"></i>Add to wishlist</a></li>
                            <li><a href=\"#\"><i class=\"fa fa-plus-square\"></i>Add to compare</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class=\"col-sm-4\">
                <div class=\"product-image-wrapper\">
                    <div class=\"single-products\">
                        <div class=\"productinfo text-center\">
                            <img src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/images/home/product4.jpg\" alt=\"\" />
                            <h2>\$56</h2>
                            <p>Easy Polo Black Edition</p>
                            <a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
                        </div>
                        <div class=\"product-overlay\">
                            <div class=\"overlay-content\">
                                <h2>\$56</h2>
                                <p>Easy Polo Black Edition</p>
                                <a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
                            </div>
                        </div>
                        <img src=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/images/home/new.png\" class=\"new\" alt=\"\" />
                    </div>
                    <div class=\"choose\">
                        <ul class=\"nav nav-pills nav-justified\">
                            <li><a href=\"#\"><i class=\"fa fa-plus-square\"></i>Add to wishlist</a></li>
                            <li><a href=\"#\"><i class=\"fa fa-plus-square\"></i>Add to compare</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class=\"col-sm-4\">
                <div class=\"product-image-wrapper\">
                    <div class=\"single-products\">
                        <div class=\"productinfo text-center\">
                            <img src=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/images/home/product5.jpg\" alt=\"\" />
                            <h2>\$56</h2>
                            <p>Easy Polo Black Edition</p>
                            <a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
                        </div>
                        <div class=\"product-overlay\">
                            <div class=\"overlay-content\">
                                <h2>\$56</h2>
                                <p>Easy Polo Black Edition</p>
                                <a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
                            </div>
                        </div>
                        <img src=\"";
        // line 136
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/images/home/sale.png\" class=\"new\" alt=\"\" />
                    </div>
                    <div class=\"choose\">
                        <ul class=\"nav nav-pills nav-justified\">
                            <li><a href=\"#\"><i class=\"fa fa-plus-square\"></i>Add to wishlist</a></li>
                            <li><a href=\"#\"><i class=\"fa fa-plus-square\"></i>Add to compare</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class=\"col-sm-4\">
                <div class=\"product-image-wrapper\">
                    <div class=\"single-products\">
                        <div class=\"productinfo text-center\">
                            <img src=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/images/home/product6.jpg\" alt=\"\" />
                            <h2>\$56</h2>
                            <p>Easy Polo Black Edition</p>
                            <a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
                        </div>
                        <div class=\"product-overlay\">
                            <div class=\"overlay-content\">
                                <h2>\$56</h2>
                                <p>Easy Polo Black Edition</p>
                                <a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
                            </div>
                        </div>
                    </div>
                    <div class=\"choose\">
                        <ul class=\"nav nav-pills nav-justified\">
                            <li><a href=\"#\"><i class=\"fa fa-plus-square\"></i>Add to wishlist</a></li>
                            <li><a href=\"#\"><i class=\"fa fa-plus-square\"></i>Add to compare</a></li>
                        </ul>
                    </div>
                </div>
            </div>

        </div><!--features_items-->

        <div class=\"category-tab\"><!--category-tab-->
            <div class=\"col-sm-12\">
                <ul class=\"nav nav-tabs\">
                    <li class=\"active\"><a href=\"#tshirt\" data-toggle=\"tab\">T-Shirt</a></li>
                    <li><a href=\"#blazers\" data-toggle=\"tab\">Blazers</a></li>
                    <li><a href=\"#sunglass\" data-toggle=\"tab\">Sunglass</a></li>
                    <li><a href=\"#kids\" data-toggle=\"tab\">Kids</a></li>
                    <li><a href=\"#poloshirt\" data-toggle=\"tab\">Polo shirt</a></li>
                </ul>
            </div>
            <div class=\"tab-content\">
                <div class=\"tab-pane fade active in\" id=\"tshirt\" >
                    <div class=\"col-sm-3\">
                        <div class=\"product-image-wrapper\">
                            <div class=\"single-products\">
                                <div class=\"productinfo text-center\">
                                    <img src=\"";
        // line 190
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/images/home/gallery1.jpg\" alt=\"\" />
                                    <h2>\$56</h2>
                                    <p>Easy Polo Black Edition</p>
                                    <a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-3\">
                        <div class=\"product-image-wrapper\">
                            <div class=\"single-products\">
                                <div class=\"productinfo text-center\">
                                    <img src=\"";
        // line 203
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/images/home/gallery2.jpg\" alt=\"\" />
                                    <h2>\$56</h2>
                                    <p>Easy Polo Black Edition</p>
                                    <a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-3\">
                        <div class=\"product-image-wrapper\">
                            <div class=\"single-products\">
                                <div class=\"productinfo text-center\">
                                    <img src=\"";
        // line 216
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/images/home/gallery3.jpg\" alt=\"\" />
                                    <h2>\$56</h2>
                                    <p>Easy Polo Black Edition</p>
                                    <a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-3\">
                        <div class=\"product-image-wrapper\">
                            <div class=\"single-products\">
                                <div class=\"productinfo text-center\">
                                    <img src=\"";
        // line 229
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/images/home/gallery4.jpg\" alt=\"\" />
                                    <h2>\$56</h2>
                                    <p>Easy Polo Black Edition</p>
                                    <a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"tab-pane fade\" id=\"blazers\" >
                    <div class=\"col-sm-3\">
                        <div class=\"product-image-wrapper\">
                            <div class=\"single-products\">
                                <div class=\"productinfo text-center\">
                                    <img src=\"";
        // line 245
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/images/home/gallery4.jpg\" alt=\"\" />
                                    <h2>\$56</h2>
                                    <p>Easy Polo Black Edition</p>
                                    <a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-3\">
                        <div class=\"product-image-wrapper\">
                            <div class=\"single-products\">
                                <div class=\"productinfo text-center\">
                                    <img src=\"";
        // line 258
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/images/home/gallery3.jpg\" alt=\"\" />
                                    <h2>\$56</h2>
                                    <p>Easy Polo Black Edition</p>
                                    <a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-3\">
                        <div class=\"product-image-wrapper\">
                            <div class=\"single-products\">
                                <div class=\"productinfo text-center\">
                                    <img src=\"";
        // line 271
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/images/home/gallery2.jpg\" alt=\"\" />
                                    <h2>\$56</h2>
                                    <p>Easy Polo Black Edition</p>
                                    <a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-3\">
                        <div class=\"product-image-wrapper\">
                            <div class=\"single-products\">
                                <div class=\"productinfo text-center\">
                                    <img src=\"";
        // line 284
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/images/home/gallery1.jpg\" alt=\"\" />
                                    <h2>\$56</h2>
                                    <p>Easy Polo Black Edition</p>
                                    <a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"tab-pane fade\" id=\"sunglass\" >
                    <div class=\"col-sm-3\">
                        <div class=\"product-image-wrapper\">
                            <div class=\"single-products\">
                                <div class=\"productinfo text-center\">
                                    <img src=\"";
        // line 300
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/images/home/gallery3.jpg\" alt=\"\" />
                                    <h2>\$56</h2>
                                    <p>Easy Polo Black Edition</p>
                                    <a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-3\">
                        <div class=\"product-image-wrapper\">
                            <div class=\"single-products\">
                                <div class=\"productinfo text-center\">
                                    <img src=\"";
        // line 313
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/images/home/gallery4.jpg\" alt=\"\" />
                                    <h2>\$56</h2>
                                    <p>Easy Polo Black Edition</p>
                                    <a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-3\">
                        <div class=\"product-image-wrapper\">
                            <div class=\"single-products\">
                                <div class=\"productinfo text-center\">
                                    <img src=\"";
        // line 326
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/images/home/gallery1.jpg\" alt=\"\" />
                                    <h2>\$56</h2>
                                    <p>Easy Polo Black Edition</p>
                                    <a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-3\">
                        <div class=\"product-image-wrapper\">
                            <div class=\"single-products\">
                                <div class=\"productinfo text-center\">
                                    <img src=\"";
        // line 339
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/images/home/gallery2.jpg\" alt=\"\" />
                                    <h2>\$56</h2>
                                    <p>Easy Polo Black Edition</p>
                                    <a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"tab-pane fade\" id=\"kids\" >
                    <div class=\"col-sm-3\">
                        <div class=\"product-image-wrapper\">
                            <div class=\"single-products\">
                                <div class=\"productinfo text-center\">
                                    <img src=\"";
        // line 355
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/images/home/gallery1.jpg\" alt=\"\" />
                                    <h2>\$56</h2>
                                    <p>Easy Polo Black Edition</p>
                                    <a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-3\">
                        <div class=\"product-image-wrapper\">
                            <div class=\"single-products\">
                                <div class=\"productinfo text-center\">
                                    <img src=\"";
        // line 368
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/images/home/gallery2.jpg\" alt=\"\" />
                                    <h2>\$56</h2>
                                    <p>Easy Polo Black Edition</p>
                                    <a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-3\">
                        <div class=\"product-image-wrapper\">
                            <div class=\"single-products\">
                                <div class=\"productinfo text-center\">
                                    <img src=\"";
        // line 381
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/images/home/gallery3.jpg\" alt=\"\" />
                                    <h2>\$56</h2>
                                    <p>Easy Polo Black Edition</p>
                                    <a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-3\">
                        <div class=\"product-image-wrapper\">
                            <div class=\"single-products\">
                                <div class=\"productinfo text-center\">
                                    <img src=\"";
        // line 394
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/images/home/gallery4.jpg\" alt=\"\" />
                                    <h2>\$56</h2>
                                    <p>Easy Polo Black Edition</p>
                                    <a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"tab-pane fade\" id=\"poloshirt\" >
                    <div class=\"col-sm-3\">
                        <div class=\"product-image-wrapper\">
                            <div class=\"single-products\">
                                <div class=\"productinfo text-center\">
                                    <img src=\"";
        // line 410
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/images/home/gallery2.jpg\" alt=\"\" />
                                    <h2>\$56</h2>
                                    <p>Easy Polo Black Edition</p>
                                    <a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-3\">
                        <div class=\"product-image-wrapper\">
                            <div class=\"single-products\">
                                <div class=\"productinfo text-center\">
                                    <img src=\"";
        // line 423
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/images/home/gallery4.jpg\" alt=\"\" />
                                    <h2>\$56</h2>
                                    <p>Easy Polo Black Edition</p>
                                    <a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-3\">
                        <div class=\"product-image-wrapper\">
                            <div class=\"single-products\">
                                <div class=\"productinfo text-center\">
                                    <img src=\"";
        // line 436
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/images/home/gallery3.jpg\" alt=\"\" />
                                    <h2>\$56</h2>
                                    <p>Easy Polo Black Edition</p>
                                    <a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-3\">
                        <div class=\"product-image-wrapper\">
                            <div class=\"single-products\">
                                <div class=\"productinfo text-center\">
                                    <img src=\"";
        // line 449
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/images/home/gallery1.jpg\" alt=\"\" />
                                    <h2>\$56</h2>
                                    <p>Easy Polo Black Edition</p>
                                    <a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/category-tab-->

        <div class=\"recommended_items\"><!--recommended_items-->
            <h2 class=\"title text-center\">recommended items</h2>

            <div id=\"recommended-item-carousel\" class=\"carousel slide\" data-ride=\"carousel\">
                <div class=\"carousel-inner\">
                    <div class=\"item active\">
                        <div class=\"col-sm-4\">
                            <div class=\"product-image-wrapper\">
                                <div class=\"single-products\">
                                    <div class=\"productinfo text-center\">
                                        <img src=\"";
        // line 472
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/images/home/recommend1.jpg\" alt=\"\" />
                                        <h2>\$56</h2>
                                        <p>Easy Polo Black Edition</p>
                                        <a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-4\">
                            <div class=\"product-image-wrapper\">
                                <div class=\"single-products\">
                                    <div class=\"productinfo text-center\">
                                        <img src=\"";
        // line 485
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/images/home/recommend2.jpg\" alt=\"\" />
                                        <h2>\$56</h2>
                                        <p>Easy Polo Black Edition</p>
                                        <a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-4\">
                            <div class=\"product-image-wrapper\">
                                <div class=\"single-products\">
                                    <div class=\"productinfo text-center\">
                                        <img src=\"";
        // line 498
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/images/home/recommend3.jpg\" alt=\"\" />
                                        <h2>\$56</h2>
                                        <p>Easy Polo Black Edition</p>
                                        <a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"item\">
                        <div class=\"col-sm-4\">
                            <div class=\"product-image-wrapper\">
                                <div class=\"single-products\">
                                    <div class=\"productinfo text-center\">
                                        <img src=\"";
        // line 513
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/images/home/recommend1.jpg\" alt=\"\" />
                                        <h2>\$56</h2>
                                        <p>Easy Polo Black Edition</p>
                                        <a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-4\">
                            <div class=\"product-image-wrapper\">
                                <div class=\"single-products\">
                                    <div class=\"productinfo text-center\">
                                        <img src=\"";
        // line 526
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/images/home/recommend2.jpg\" alt=\"\" />
                                        <h2>\$56</h2>
                                        <p>Easy Polo Black Edition</p>
                                        <a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-4\">
                            <div class=\"product-image-wrapper\">
                                <div class=\"single-products\">
                                    <div class=\"productinfo text-center\">
                                        <img src=\"";
        // line 539
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/images/home/recommend3.jpg\" alt=\"\" />
                                        <h2>\$56</h2>
                                        <p>Easy Polo Black Edition</p>
                                        <a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a class=\"left recommended-item-control\" href=\"#recommended-item-carousel\" data-slide=\"prev\">
                    <i class=\"fa fa-angle-left\"></i>
                </a>
                <a class=\"right recommended-item-control\" href=\"#recommended-item-carousel\" data-slide=\"next\">
                    <i class=\"fa fa-angle-right\"></i>
                </a>
            </div>
        </div><!--/recommended_items-->

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
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  792 => 539,  776 => 526,  760 => 513,  742 => 498,  726 => 485,  710 => 472,  684 => 449,  668 => 436,  652 => 423,  636 => 410,  617 => 394,  601 => 381,  585 => 368,  569 => 355,  550 => 339,  534 => 326,  518 => 313,  502 => 300,  483 => 284,  467 => 271,  451 => 258,  435 => 245,  416 => 229,  400 => 216,  384 => 203,  368 => 190,  325 => 150,  308 => 136,  293 => 124,  276 => 110,  261 => 98,  233 => 73,  205 => 48,  177 => 23,  168 => 16,  158 => 15,  139 => 12,  120 => 11,  101 => 9,  82 => 8,  63 => 7,  40 => 5,);
    }

    public function getSourceContext()
    {
        return new Source("



{% extends 'homebase.html.twig' %}

{% block title %}Hello HomeController!{% endblock %}
{% block keywords %}Haaa!{% endblock %}
{% block description %}Hellfafa{% endblock %}

{% block slider %}{% include('home/slider.html.twig') %}{% endblock %}
{% block sidebar %}{% include('home/sidebar.html.twig') %}{% endblock %}


{% block body %}
    <div class=\"col-sm-9 padding-right\">
        <div class=\"features_items\"><!--features_items-->
            <h2 class=\"title text-center\">Features Items</h2>
            <div class=\"col-sm-4\">
                <div class=\"product-image-wrapper\">
                    <div class=\"single-products\">
                        <div class=\"productinfo text-center\">
                            <img src=\"{{ asset('assets') }}/images/home/product1.jpg\" alt=\"\" />
                            <h2>\$56</h2>
                            <p>Easy Polo Black Edition</p>
                            <a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
                        </div>
                        <div class=\"product-overlay\">
                            <div class=\"overlay-content\">
                                <h2>\$56</h2>
                                <p>Easy Polo Black Edition</p>
                                <a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
                            </div>
                        </div>
                    </div>
                    <div class=\"choose\">
                        <ul class=\"nav nav-pills nav-justified\">
                            <li><a href=\"#\"><i class=\"fa fa-plus-square\"></i>Add to wishlist</a></li>
                            <li><a href=\"#\"><i class=\"fa fa-plus-square\"></i>Add to compare</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class=\"col-sm-4\">
                <div class=\"product-image-wrapper\">
                    <div class=\"single-products\">
                        <div class=\"productinfo text-center\">
                            <img src=\"{{ asset('assets') }}/images/home/product2.jpg\" alt=\"\" />
                            <h2>\$56</h2>
                            <p>Easy Polo Black Edition</p>
                            <a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
                        </div>
                        <div class=\"product-overlay\">
                            <div class=\"overlay-content\">
                                <h2>\$56</h2>
                                <p>Easy Polo Black Edition</p>
                                <a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
                            </div>
                        </div>
                    </div>
                    <div class=\"choose\">
                        <ul class=\"nav nav-pills nav-justified\">
                            <li><a href=\"#\"><i class=\"fa fa-plus-square\"></i>Add to wishlist</a></li>
                            <li><a href=\"#\"><i class=\"fa fa-plus-square\"></i>Add to compare</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class=\"col-sm-4\">
                <div class=\"product-image-wrapper\">
                    <div class=\"single-products\">
                        <div class=\"productinfo text-center\">
                            <img src=\"{{ asset('assets') }}/images/home/product3.jpg\" alt=\"\" />
                            <h2>\$56</h2>
                            <p>Easy Polo Black Edition</p>
                            <a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
                        </div>
                        <div class=\"product-overlay\">
                            <div class=\"overlay-content\">
                                <h2>\$56</h2>
                                <p>Easy Polo Black Edition</p>
                                <a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
                            </div>
                        </div>
                    </div>
                    <div class=\"choose\">
                        <ul class=\"nav nav-pills nav-justified\">
                            <li><a href=\"#\"><i class=\"fa fa-plus-square\"></i>Add to wishlist</a></li>
                            <li><a href=\"#\"><i class=\"fa fa-plus-square\"></i>Add to compare</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class=\"col-sm-4\">
                <div class=\"product-image-wrapper\">
                    <div class=\"single-products\">
                        <div class=\"productinfo text-center\">
                            <img src=\"{{ asset('assets') }}/images/home/product4.jpg\" alt=\"\" />
                            <h2>\$56</h2>
                            <p>Easy Polo Black Edition</p>
                            <a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
                        </div>
                        <div class=\"product-overlay\">
                            <div class=\"overlay-content\">
                                <h2>\$56</h2>
                                <p>Easy Polo Black Edition</p>
                                <a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
                            </div>
                        </div>
                        <img src=\"{{ asset('assets') }}/images/home/new.png\" class=\"new\" alt=\"\" />
                    </div>
                    <div class=\"choose\">
                        <ul class=\"nav nav-pills nav-justified\">
                            <li><a href=\"#\"><i class=\"fa fa-plus-square\"></i>Add to wishlist</a></li>
                            <li><a href=\"#\"><i class=\"fa fa-plus-square\"></i>Add to compare</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class=\"col-sm-4\">
                <div class=\"product-image-wrapper\">
                    <div class=\"single-products\">
                        <div class=\"productinfo text-center\">
                            <img src=\"{{ asset('assets') }}/images/home/product5.jpg\" alt=\"\" />
                            <h2>\$56</h2>
                            <p>Easy Polo Black Edition</p>
                            <a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
                        </div>
                        <div class=\"product-overlay\">
                            <div class=\"overlay-content\">
                                <h2>\$56</h2>
                                <p>Easy Polo Black Edition</p>
                                <a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
                            </div>
                        </div>
                        <img src=\"{{ asset('assets') }}/images/home/sale.png\" class=\"new\" alt=\"\" />
                    </div>
                    <div class=\"choose\">
                        <ul class=\"nav nav-pills nav-justified\">
                            <li><a href=\"#\"><i class=\"fa fa-plus-square\"></i>Add to wishlist</a></li>
                            <li><a href=\"#\"><i class=\"fa fa-plus-square\"></i>Add to compare</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class=\"col-sm-4\">
                <div class=\"product-image-wrapper\">
                    <div class=\"single-products\">
                        <div class=\"productinfo text-center\">
                            <img src=\"{{ asset('assets') }}/images/home/product6.jpg\" alt=\"\" />
                            <h2>\$56</h2>
                            <p>Easy Polo Black Edition</p>
                            <a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
                        </div>
                        <div class=\"product-overlay\">
                            <div class=\"overlay-content\">
                                <h2>\$56</h2>
                                <p>Easy Polo Black Edition</p>
                                <a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
                            </div>
                        </div>
                    </div>
                    <div class=\"choose\">
                        <ul class=\"nav nav-pills nav-justified\">
                            <li><a href=\"#\"><i class=\"fa fa-plus-square\"></i>Add to wishlist</a></li>
                            <li><a href=\"#\"><i class=\"fa fa-plus-square\"></i>Add to compare</a></li>
                        </ul>
                    </div>
                </div>
            </div>

        </div><!--features_items-->

        <div class=\"category-tab\"><!--category-tab-->
            <div class=\"col-sm-12\">
                <ul class=\"nav nav-tabs\">
                    <li class=\"active\"><a href=\"#tshirt\" data-toggle=\"tab\">T-Shirt</a></li>
                    <li><a href=\"#blazers\" data-toggle=\"tab\">Blazers</a></li>
                    <li><a href=\"#sunglass\" data-toggle=\"tab\">Sunglass</a></li>
                    <li><a href=\"#kids\" data-toggle=\"tab\">Kids</a></li>
                    <li><a href=\"#poloshirt\" data-toggle=\"tab\">Polo shirt</a></li>
                </ul>
            </div>
            <div class=\"tab-content\">
                <div class=\"tab-pane fade active in\" id=\"tshirt\" >
                    <div class=\"col-sm-3\">
                        <div class=\"product-image-wrapper\">
                            <div class=\"single-products\">
                                <div class=\"productinfo text-center\">
                                    <img src=\"{{ asset('assets') }}/images/home/gallery1.jpg\" alt=\"\" />
                                    <h2>\$56</h2>
                                    <p>Easy Polo Black Edition</p>
                                    <a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-3\">
                        <div class=\"product-image-wrapper\">
                            <div class=\"single-products\">
                                <div class=\"productinfo text-center\">
                                    <img src=\"{{ asset('assets') }}/images/home/gallery2.jpg\" alt=\"\" />
                                    <h2>\$56</h2>
                                    <p>Easy Polo Black Edition</p>
                                    <a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-3\">
                        <div class=\"product-image-wrapper\">
                            <div class=\"single-products\">
                                <div class=\"productinfo text-center\">
                                    <img src=\"{{ asset('assets') }}/images/home/gallery3.jpg\" alt=\"\" />
                                    <h2>\$56</h2>
                                    <p>Easy Polo Black Edition</p>
                                    <a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-3\">
                        <div class=\"product-image-wrapper\">
                            <div class=\"single-products\">
                                <div class=\"productinfo text-center\">
                                    <img src=\"{{ asset('assets') }}/images/home/gallery4.jpg\" alt=\"\" />
                                    <h2>\$56</h2>
                                    <p>Easy Polo Black Edition</p>
                                    <a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"tab-pane fade\" id=\"blazers\" >
                    <div class=\"col-sm-3\">
                        <div class=\"product-image-wrapper\">
                            <div class=\"single-products\">
                                <div class=\"productinfo text-center\">
                                    <img src=\"{{ asset('assets') }}/images/home/gallery4.jpg\" alt=\"\" />
                                    <h2>\$56</h2>
                                    <p>Easy Polo Black Edition</p>
                                    <a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-3\">
                        <div class=\"product-image-wrapper\">
                            <div class=\"single-products\">
                                <div class=\"productinfo text-center\">
                                    <img src=\"{{ asset('assets') }}/images/home/gallery3.jpg\" alt=\"\" />
                                    <h2>\$56</h2>
                                    <p>Easy Polo Black Edition</p>
                                    <a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-3\">
                        <div class=\"product-image-wrapper\">
                            <div class=\"single-products\">
                                <div class=\"productinfo text-center\">
                                    <img src=\"{{ asset('assets') }}/images/home/gallery2.jpg\" alt=\"\" />
                                    <h2>\$56</h2>
                                    <p>Easy Polo Black Edition</p>
                                    <a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-3\">
                        <div class=\"product-image-wrapper\">
                            <div class=\"single-products\">
                                <div class=\"productinfo text-center\">
                                    <img src=\"{{ asset('assets') }}/images/home/gallery1.jpg\" alt=\"\" />
                                    <h2>\$56</h2>
                                    <p>Easy Polo Black Edition</p>
                                    <a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"tab-pane fade\" id=\"sunglass\" >
                    <div class=\"col-sm-3\">
                        <div class=\"product-image-wrapper\">
                            <div class=\"single-products\">
                                <div class=\"productinfo text-center\">
                                    <img src=\"{{ asset('assets') }}/images/home/gallery3.jpg\" alt=\"\" />
                                    <h2>\$56</h2>
                                    <p>Easy Polo Black Edition</p>
                                    <a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-3\">
                        <div class=\"product-image-wrapper\">
                            <div class=\"single-products\">
                                <div class=\"productinfo text-center\">
                                    <img src=\"{{ asset('assets') }}/images/home/gallery4.jpg\" alt=\"\" />
                                    <h2>\$56</h2>
                                    <p>Easy Polo Black Edition</p>
                                    <a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-3\">
                        <div class=\"product-image-wrapper\">
                            <div class=\"single-products\">
                                <div class=\"productinfo text-center\">
                                    <img src=\"{{ asset('assets') }}/images/home/gallery1.jpg\" alt=\"\" />
                                    <h2>\$56</h2>
                                    <p>Easy Polo Black Edition</p>
                                    <a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-3\">
                        <div class=\"product-image-wrapper\">
                            <div class=\"single-products\">
                                <div class=\"productinfo text-center\">
                                    <img src=\"{{ asset('assets') }}/images/home/gallery2.jpg\" alt=\"\" />
                                    <h2>\$56</h2>
                                    <p>Easy Polo Black Edition</p>
                                    <a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"tab-pane fade\" id=\"kids\" >
                    <div class=\"col-sm-3\">
                        <div class=\"product-image-wrapper\">
                            <div class=\"single-products\">
                                <div class=\"productinfo text-center\">
                                    <img src=\"{{ asset('assets') }}/images/home/gallery1.jpg\" alt=\"\" />
                                    <h2>\$56</h2>
                                    <p>Easy Polo Black Edition</p>
                                    <a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-3\">
                        <div class=\"product-image-wrapper\">
                            <div class=\"single-products\">
                                <div class=\"productinfo text-center\">
                                    <img src=\"{{ asset('assets') }}/images/home/gallery2.jpg\" alt=\"\" />
                                    <h2>\$56</h2>
                                    <p>Easy Polo Black Edition</p>
                                    <a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-3\">
                        <div class=\"product-image-wrapper\">
                            <div class=\"single-products\">
                                <div class=\"productinfo text-center\">
                                    <img src=\"{{ asset('assets') }}/images/home/gallery3.jpg\" alt=\"\" />
                                    <h2>\$56</h2>
                                    <p>Easy Polo Black Edition</p>
                                    <a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-3\">
                        <div class=\"product-image-wrapper\">
                            <div class=\"single-products\">
                                <div class=\"productinfo text-center\">
                                    <img src=\"{{ asset('assets') }}/images/home/gallery4.jpg\" alt=\"\" />
                                    <h2>\$56</h2>
                                    <p>Easy Polo Black Edition</p>
                                    <a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"tab-pane fade\" id=\"poloshirt\" >
                    <div class=\"col-sm-3\">
                        <div class=\"product-image-wrapper\">
                            <div class=\"single-products\">
                                <div class=\"productinfo text-center\">
                                    <img src=\"{{ asset('assets') }}/images/home/gallery2.jpg\" alt=\"\" />
                                    <h2>\$56</h2>
                                    <p>Easy Polo Black Edition</p>
                                    <a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-3\">
                        <div class=\"product-image-wrapper\">
                            <div class=\"single-products\">
                                <div class=\"productinfo text-center\">
                                    <img src=\"{{ asset('assets') }}/images/home/gallery4.jpg\" alt=\"\" />
                                    <h2>\$56</h2>
                                    <p>Easy Polo Black Edition</p>
                                    <a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-3\">
                        <div class=\"product-image-wrapper\">
                            <div class=\"single-products\">
                                <div class=\"productinfo text-center\">
                                    <img src=\"{{ asset('assets') }}/images/home/gallery3.jpg\" alt=\"\" />
                                    <h2>\$56</h2>
                                    <p>Easy Polo Black Edition</p>
                                    <a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-3\">
                        <div class=\"product-image-wrapper\">
                            <div class=\"single-products\">
                                <div class=\"productinfo text-center\">
                                    <img src=\"{{ asset('assets') }}/images/home/gallery1.jpg\" alt=\"\" />
                                    <h2>\$56</h2>
                                    <p>Easy Polo Black Edition</p>
                                    <a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/category-tab-->

        <div class=\"recommended_items\"><!--recommended_items-->
            <h2 class=\"title text-center\">recommended items</h2>

            <div id=\"recommended-item-carousel\" class=\"carousel slide\" data-ride=\"carousel\">
                <div class=\"carousel-inner\">
                    <div class=\"item active\">
                        <div class=\"col-sm-4\">
                            <div class=\"product-image-wrapper\">
                                <div class=\"single-products\">
                                    <div class=\"productinfo text-center\">
                                        <img src=\"{{ asset('assets') }}/images/home/recommend1.jpg\" alt=\"\" />
                                        <h2>\$56</h2>
                                        <p>Easy Polo Black Edition</p>
                                        <a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-4\">
                            <div class=\"product-image-wrapper\">
                                <div class=\"single-products\">
                                    <div class=\"productinfo text-center\">
                                        <img src=\"{{ asset('assets') }}/images/home/recommend2.jpg\" alt=\"\" />
                                        <h2>\$56</h2>
                                        <p>Easy Polo Black Edition</p>
                                        <a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-4\">
                            <div class=\"product-image-wrapper\">
                                <div class=\"single-products\">
                                    <div class=\"productinfo text-center\">
                                        <img src=\"{{ asset('assets') }}/images/home/recommend3.jpg\" alt=\"\" />
                                        <h2>\$56</h2>
                                        <p>Easy Polo Black Edition</p>
                                        <a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"item\">
                        <div class=\"col-sm-4\">
                            <div class=\"product-image-wrapper\">
                                <div class=\"single-products\">
                                    <div class=\"productinfo text-center\">
                                        <img src=\"{{ asset('assets') }}/images/home/recommend1.jpg\" alt=\"\" />
                                        <h2>\$56</h2>
                                        <p>Easy Polo Black Edition</p>
                                        <a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-4\">
                            <div class=\"product-image-wrapper\">
                                <div class=\"single-products\">
                                    <div class=\"productinfo text-center\">
                                        <img src=\"{{ asset('assets') }}/images/home/recommend2.jpg\" alt=\"\" />
                                        <h2>\$56</h2>
                                        <p>Easy Polo Black Edition</p>
                                        <a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-4\">
                            <div class=\"product-image-wrapper\">
                                <div class=\"single-products\">
                                    <div class=\"productinfo text-center\">
                                        <img src=\"{{ asset('assets') }}/images/home/recommend3.jpg\" alt=\"\" />
                                        <h2>\$56</h2>
                                        <p>Easy Polo Black Edition</p>
                                        <a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a class=\"left recommended-item-control\" href=\"#recommended-item-carousel\" data-slide=\"prev\">
                    <i class=\"fa fa-angle-left\"></i>
                </a>
                <a class=\"right recommended-item-control\" href=\"#recommended-item-carousel\" data-slide=\"next\">
                    <i class=\"fa fa-angle-right\"></i>
                </a>
            </div>
        </div><!--/recommended_items-->

    </div>
    </div>
    </div>
    </section>

{% endblock %}
", "home/index.html.twig", "C:\\xampp\\htdocs\\mysite\\templates\\home\\index.html.twig");
    }
}
