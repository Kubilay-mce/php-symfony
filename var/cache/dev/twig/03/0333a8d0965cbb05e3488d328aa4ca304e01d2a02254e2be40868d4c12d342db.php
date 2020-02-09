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

/* security/adminlogin.html.twig */
class __TwigTemplate_7acb57465c005f4d3ab8af4aaed72f7e89b40630a0118fdfb4cd2c9f2972d4da extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/adminlogin.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/adminlogin.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html dir=\"ltr\">

<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <!-- Favicon icon -->
    <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"../../";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/admin/assets/images/favicon.png\">
    <title>Matrix Template - The Ultimate Multipurpose admin template</title>
    <!-- Custom CSS -->
    <link href=\"../../";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/admin/assets/dist/css/style.min.css\" rel=\"stylesheet\">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
    <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->
</head>

<body>
<div class=\"main-wrapper\">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class=\"preloader\">
        <div class=\"lds-ripple\">
            <div class=\"lds-pos\"></div>
            <div class=\"lds-pos\"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Login box.scss -->
    <!-- ============================================================== -->
    <div class=\"auth-wrapper d-flex no-block justify-content-center align-items-center bg-dark\">
        <div class=\"auth-box bg-dark border-top border-secondary\">
            <div id=\"loginform\">
                <div class=\"text-center p-t-20 p-b-20\">
                    <span class=\"db\"><img src=\"../../";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/admin/assets/images/logo.png\" alt=\"logo\" /></span>
                </div>
                <!-- Form -->
                <form method=\"post\">
                    ";
        // line 49
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 49, $this->source); })())) {
            // line 50
            echo "                        <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 50, $this->source); })()), "messageKey", [], "any", false, false, false, 50), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 50, $this->source); })()), "messageData", [], "any", false, false, false, 50), "security"), "html", null, true);
            echo "</div>
                    ";
        }
        // line 52
        echo "
                    ";
        // line 53
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 53, $this->source); })()), "user", [], "any", false, false, false, 53)) {
            // line 54
            echo "                        <div style=\"color: #4f9fcf\" class=\"mb-3\">
                            You are logged in as ";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 55, $this->source); })()), "user", [], "any", false, false, false, 55), "username", [], "any", false, false, false, 55), "html", null, true);
            echo ", <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Logout</a>
                        </div>
                    ";
        }
        // line 58
        echo "
                    <h1 style=\"color: #5BBCEC\" class=\"h3 mb-3 font-weight-normal\">Please sign in</h1>
                    <h4 style=\"color: #00cc00\"><label for=\"inputEmail\">Email</label></h4>
                    <input type=\"email\" value=\"";
        // line 61
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 61, $this->source); })()), "html", null, true);
        echo "\" name=\"email\" id=\"inputEmail\" class=\"form-control\" required autofocus>
                    <h4 style=\"color: #00cc00\"><label  for=\"inputPassword\">Password</label></h4>
                    <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" required>

                    <input type=\"hidden\" name=\"_csrf_token\"
                           value=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\"
                    >

                    ";
        // line 79
        echo "
                    <button class=\"btn btn-primary btn-block\" type=\"submit\">
                        Sign in
                    </button>
                </form>
                <form class=\"col-12\" action=\"index.html\">
                    <div class=\"row m-t-20 p-t-20 border-top border-secondary\">
                        <div class=\"col-12\">
                            <a class=\"btn btn-success\" href=\"/register\" id=\"to-login\" name=\"action\">Register</a>
                            <button class=\"btn btn-info float-right\" type=\"button\" name=\"action\">Recover</button>
                        </div>
                    </div>
                </form>


            </div>
            <div id=\"recoverform\">
                <div class=\"text-center\">
                    <span class=\"text-white\">Enter your e-mail address below and we will send you instructions how to recover a password.</span>
                </div>
                <div class=\"row m-t-20\">
                    <!-- Form -->

                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Login box.scss -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Page wrapper scss in scafholding.scss -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Page wrapper scss in scafholding.scss -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Right Sidebar -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Right Sidebar -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- All Required js -->
<!-- ============================================================== -->
<script src=\"../../";
        // line 125
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/admin/assets/libs/jquery/dist/jquery.min.js\"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src=\"../../";
        // line 127
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/admin/assets/libs/popper.js/dist/umd/popper.min.js\"></script>
<script src=\"../../";
        // line 128
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/admin/assets/libs/bootstrap/dist/js/bootstrap.min.js\"></script>
<!-- ============================================================== -->
<!-- This page plugin js -->
<!-- ============================================================== -->
<script>

    \$('[data-toggle=\"tooltip\"]').tooltip();
    \$(\".preloader\").fadeOut();
    // ==============================================================
    // Login and Recover Password
    // ==============================================================
    \$('#to-recover').on(\"click\", function() {
        \$(\"#loginform\").slideUp();
        \$(\"#recoverform\").fadeIn();
    });
    \$('#to-login').click(function(){

        \$(\"#recoverform\").hide();
        \$(\"#loginform\").fadeIn();
    });
</script>

</body>

</html>












";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "security/adminlogin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 128,  198 => 127,  193 => 125,  145 => 79,  139 => 66,  131 => 61,  126 => 58,  118 => 55,  115 => 54,  113 => 53,  110 => 52,  104 => 50,  102 => 49,  95 => 45,  62 => 15,  56 => 12,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html dir=\"ltr\">

<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <!-- Favicon icon -->
    <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"../../{{ asset('assets') }}/admin/assets/images/favicon.png\">
    <title>Matrix Template - The Ultimate Multipurpose admin template</title>
    <!-- Custom CSS -->
    <link href=\"../../{{ asset('assets') }}/admin/assets/dist/css/style.min.css\" rel=\"stylesheet\">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
    <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->
</head>

<body>
<div class=\"main-wrapper\">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class=\"preloader\">
        <div class=\"lds-ripple\">
            <div class=\"lds-pos\"></div>
            <div class=\"lds-pos\"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Login box.scss -->
    <!-- ============================================================== -->
    <div class=\"auth-wrapper d-flex no-block justify-content-center align-items-center bg-dark\">
        <div class=\"auth-box bg-dark border-top border-secondary\">
            <div id=\"loginform\">
                <div class=\"text-center p-t-20 p-b-20\">
                    <span class=\"db\"><img src=\"../../{{ asset('assets') }}/admin/assets/images/logo.png\" alt=\"logo\" /></span>
                </div>
                <!-- Form -->
                <form method=\"post\">
                    {% if error %}
                        <div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
                    {% endif %}

                    {% if app.user %}
                        <div style=\"color: #4f9fcf\" class=\"mb-3\">
                            You are logged in as {{ app.user.username }}, <a href=\"{{ path('app_logout') }}\">Logout</a>
                        </div>
                    {% endif %}

                    <h1 style=\"color: #5BBCEC\" class=\"h3 mb-3 font-weight-normal\">Please sign in</h1>
                    <h4 style=\"color: #00cc00\"><label for=\"inputEmail\">Email</label></h4>
                    <input type=\"email\" value=\"{{ last_username }}\" name=\"email\" id=\"inputEmail\" class=\"form-control\" required autofocus>
                    <h4 style=\"color: #00cc00\"><label  for=\"inputPassword\">Password</label></h4>
                    <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" required>

                    <input type=\"hidden\" name=\"_csrf_token\"
                           value=\"{{ csrf_token('authenticate') }}\"
                    >

                    {#
                        Uncomment this section and add a remember_me option below your firewall to activate remember me functionality.
                        See https://symfony.com/doc/current/security/remember_me.html

                        <div class=\"checkbox mb-3\">
                            <label>
                                <input type=\"checkbox\" name=\"_remember_me\"> Remember me
                            </label>
                        </div>
                    #}

                    <button class=\"btn btn-primary btn-block\" type=\"submit\">
                        Sign in
                    </button>
                </form>
                <form class=\"col-12\" action=\"index.html\">
                    <div class=\"row m-t-20 p-t-20 border-top border-secondary\">
                        <div class=\"col-12\">
                            <a class=\"btn btn-success\" href=\"/register\" id=\"to-login\" name=\"action\">Register</a>
                            <button class=\"btn btn-info float-right\" type=\"button\" name=\"action\">Recover</button>
                        </div>
                    </div>
                </form>


            </div>
            <div id=\"recoverform\">
                <div class=\"text-center\">
                    <span class=\"text-white\">Enter your e-mail address below and we will send you instructions how to recover a password.</span>
                </div>
                <div class=\"row m-t-20\">
                    <!-- Form -->

                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Login box.scss -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Page wrapper scss in scafholding.scss -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Page wrapper scss in scafholding.scss -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Right Sidebar -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Right Sidebar -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- All Required js -->
<!-- ============================================================== -->
<script src=\"../../{{ asset('assets') }}/admin/assets/libs/jquery/dist/jquery.min.js\"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src=\"../../{{ asset('assets') }}/admin/assets/libs/popper.js/dist/umd/popper.min.js\"></script>
<script src=\"../../{{ asset('assets') }}/admin/assets/libs/bootstrap/dist/js/bootstrap.min.js\"></script>
<!-- ============================================================== -->
<!-- This page plugin js -->
<!-- ============================================================== -->
<script>

    \$('[data-toggle=\"tooltip\"]').tooltip();
    \$(\".preloader\").fadeOut();
    // ==============================================================
    // Login and Recover Password
    // ==============================================================
    \$('#to-recover').on(\"click\", function() {
        \$(\"#loginform\").slideUp();
        \$(\"#recoverform\").fadeIn();
    });
    \$('#to-login').click(function(){

        \$(\"#recoverform\").hide();
        \$(\"#loginform\").fadeIn();
    });
</script>

</body>

</html>












", "security/adminlogin.html.twig", "C:\\xampp\\htdocs\\mysite\\templates\\security\\adminlogin.html.twig");
    }
}
