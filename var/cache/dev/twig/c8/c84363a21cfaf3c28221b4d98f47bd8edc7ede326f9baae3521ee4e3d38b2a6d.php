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

/* admin/sidebar.html.twig */
class __TwigTemplate_5046aa506e323f38c892637fa93bafbb19d36a94b0d9c9cf5462dfff98201217 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/sidebar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/sidebar.html.twig"));

        // line 1
        echo "<aside class=\"left-sidebar\" data-sidebarbg=\"skin5\">
    <!-- Sidebar scroll-->
    <div class=\"scroll-sidebar\">
        <!-- Sidebar navigation-->
        <nav class=\"sidebar-nav\">
            <ul id=\"sidebarnav\" class=\"p-t-30\">
                <li class=\"sidebar-item\"> <a class=\"sidebar-link waves-effect waves-dark sidebar-link\" href=\"/admin/category\" aria-expanded=\"false\"><i class=\"mdi mdi-view-dashboard\"></i><span class=\"hide-menu\">Dernekler</span></a></li>
                <li class=\"sidebar-item\"> <a class=\"sidebar-link waves-effect waves-dark sidebar-link\" href=\"/admin/dernek\" aria-expanded=\"false\"><i class=\"mdi mdi-view-dashboard\"></i><span class=\"hide-menu\">Ilanlar</span></a></li>
                <li class=\"sidebar-item\"> <a class=\"sidebar-link has-arrow waves-effect waves-dark\" href=\"javascript:void(0)\" aria-expanded=\"false\"><i class=\"mdi mdi-receipt\"></i><span class=\"hide-menu\">Control Panel</span></a>
                    <ul aria-expanded=\"false\" class=\"collapse  first-level\">
                        <li class=\"sidebar-item\"><a href=\"/admin/setting\" class=\"sidebar-link\"><i class=\"mdi mdi-note-outline\"></i><span class=\"hide-menu\"> Ayarlar </span></a></li>
                        <li class=\"sidebar-item\"><a href=\"/admin/user\" class=\"sidebar-link\"><i class=\"mdi mdi-note-plus\"></i><span class=\"hide-menu\"> Users </span></a></li>
                        <li class=\"sidebar-item\"><a href=\"form-wizard.html\" class=\"sidebar-link\"><i class=\"mdi mdi-note-plus\"></i><span class=\"hide-menu\"> Tamamlananlar </span></a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "admin/sidebar.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<aside class=\"left-sidebar\" data-sidebarbg=\"skin5\">
    <!-- Sidebar scroll-->
    <div class=\"scroll-sidebar\">
        <!-- Sidebar navigation-->
        <nav class=\"sidebar-nav\">
            <ul id=\"sidebarnav\" class=\"p-t-30\">
                <li class=\"sidebar-item\"> <a class=\"sidebar-link waves-effect waves-dark sidebar-link\" href=\"/admin/category\" aria-expanded=\"false\"><i class=\"mdi mdi-view-dashboard\"></i><span class=\"hide-menu\">Dernekler</span></a></li>
                <li class=\"sidebar-item\"> <a class=\"sidebar-link waves-effect waves-dark sidebar-link\" href=\"/admin/dernek\" aria-expanded=\"false\"><i class=\"mdi mdi-view-dashboard\"></i><span class=\"hide-menu\">Ilanlar</span></a></li>
                <li class=\"sidebar-item\"> <a class=\"sidebar-link has-arrow waves-effect waves-dark\" href=\"javascript:void(0)\" aria-expanded=\"false\"><i class=\"mdi mdi-receipt\"></i><span class=\"hide-menu\">Control Panel</span></a>
                    <ul aria-expanded=\"false\" class=\"collapse  first-level\">
                        <li class=\"sidebar-item\"><a href=\"/admin/setting\" class=\"sidebar-link\"><i class=\"mdi mdi-note-outline\"></i><span class=\"hide-menu\"> Ayarlar </span></a></li>
                        <li class=\"sidebar-item\"><a href=\"/admin/user\" class=\"sidebar-link\"><i class=\"mdi mdi-note-plus\"></i><span class=\"hide-menu\"> Users </span></a></li>
                        <li class=\"sidebar-item\"><a href=\"form-wizard.html\" class=\"sidebar-link\"><i class=\"mdi mdi-note-plus\"></i><span class=\"hide-menu\"> Tamamlananlar </span></a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>", "admin/sidebar.html.twig", "C:\\xampp\\htdocs\\mysite\\templates\\admin\\sidebar.html.twig");
    }
}
