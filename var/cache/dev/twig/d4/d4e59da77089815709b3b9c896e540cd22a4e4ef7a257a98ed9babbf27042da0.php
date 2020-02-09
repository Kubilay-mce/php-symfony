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

/* user/usermenu.html.twig */
class __TwigTemplate_67bfebb11d165735de9d10fdbdd17da0d4753a5ef543bc5df194f3045b8dd321 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/usermenu.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/usermenu.html.twig"));

        // line 1
        echo "








<section>
    <div class=\"panel-group category-products\" id=\"accordian\"><!--category-productsr-->


        <div class=\"panel-group category-products\" id=\"accordian\"><!--category-productsr-->
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                    <h2 class=\"panel-title\"><a href=\"#\">User Panel</a></h2>
                    <a href=\"/user\"><img src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 18, $this->source); })()), "user", [], "any", false, false, false, 18), "image", [], "any", false, false, false, 18))), "html", null, true);
        echo "\" class=\"img-circle elevation-2\"
                                             style=\"border-radius: 40%\" height=\"100   \" alt=\"User Image\"><i class=\"icon-lock\"></i>";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "user", [], "any", false, false, false, 19), "name", [], "any", false, false, false, 19), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "user", [], "any", false, false, false, 19), "surname", [], "any", false, false, false, 19), "html", null, true);
        echo "</a>
                </div>
            </div>
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                    <h4 class=\"panel-title\"><a href=\"/user\">My Profile</a></h4>
                </div>
            </div>
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                    <h4 class=\"panel-title\"><a href=\"#\">My Derneks</a></h4>
                </div>
            </div>
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                    <h4   class=\"panel-title\"><a href=\"/user/comments\">Comments</a></h4>
                </div>
            </div>
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                    <h4 class=\"panel-title\"><a href=\"/user/dernek\">İlanlar</a></h4>
                </div>
            </div>
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                    <h4 class=\"panel-title\"><a href=\"#\">Eski İlanlar</a></h4>
                </div>
            </div>
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                    <h4 class=\"panel-title\"><a class=\"btn btn-danger\" href=\"/logout\">Logout</a></h4>
                </div>
            </div>

        </div>

    </div><!--/category-products-->
</section>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "user/usermenu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 19,  62 => 18,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("








<section>
    <div class=\"panel-group category-products\" id=\"accordian\"><!--category-productsr-->


        <div class=\"panel-group category-products\" id=\"accordian\"><!--category-productsr-->
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                    <h2 class=\"panel-title\"><a href=\"#\">User Panel</a></h2>
                    <a href=\"/user\"><img src=\"{{ asset ('uploads/images/' ~ app.user.image) }}\" class=\"img-circle elevation-2\"
                                             style=\"border-radius: 40%\" height=\"100   \" alt=\"User Image\"><i class=\"icon-lock\"></i>{{ app.user.name }} {{ app.user.surname }}</a>
                </div>
            </div>
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                    <h4 class=\"panel-title\"><a href=\"/user\">My Profile</a></h4>
                </div>
            </div>
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                    <h4 class=\"panel-title\"><a href=\"#\">My Derneks</a></h4>
                </div>
            </div>
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                    <h4   class=\"panel-title\"><a href=\"/user/comments\">Comments</a></h4>
                </div>
            </div>
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                    <h4 class=\"panel-title\"><a href=\"/user/dernek\">İlanlar</a></h4>
                </div>
            </div>
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                    <h4 class=\"panel-title\"><a href=\"#\">Eski İlanlar</a></h4>
                </div>
            </div>
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                    <h4 class=\"panel-title\"><a class=\"btn btn-danger\" href=\"/logout\">Logout</a></h4>
                </div>
            </div>

        </div>

    </div><!--/category-products-->
</section>", "user/usermenu.html.twig", "C:\\Users\\Tulpar\\Desktop\\Proje Yeni\\Son Hali\\mysiteski\\templates\\user\\usermenu.html.twig");
    }
}
