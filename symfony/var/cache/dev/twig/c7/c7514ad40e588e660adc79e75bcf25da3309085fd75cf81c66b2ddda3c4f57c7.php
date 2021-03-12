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

/* security/login.html.twig */
class __TwigTemplate_7227d9fac9d7fca19ffe6dffcbdbbe15bdafb9bea4b695f14da2408cf86ae073 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        // line 1
        $this->loadTemplate("main/header.html.twig", "security/login.html.twig", 1)->display($context);
        // line 2
        echo "
<div class=\"col-lg-12\">
    <h5 class=\"text-center\">Log in!</h5>
</div>

";
        // line 7
        $this->displayBlock('body', $context, $blocks);
        // line 32
        $this->loadTemplate("main/footer.html.twig", "security/login.html.twig", 32)->display($context);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "<form  action=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
        echo "\" method=\"post\">
    ";
        // line 9
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 9, $this->source); })())) {
            // line 10
            echo "        <div class=\"alert alert-danger\">
            <h4 class=\"text-center\">";
            // line 11
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 11, $this->source); })()), "messageKey", [], "any", false, false, false, 11), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 11, $this->source); })()), "messageData", [], "any", false, false, false, 11), "security"), "html", null, true);
            echo "</h4>
        </div>
    ";
        }
        // line 14
        echo "
    ";
        // line 15
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 15, $this->source); })()), "user", [], "any", false, false, false, 15)) {
            // line 16
            echo "        <div class=\"mb-3\">
            You are logged in as ";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 17, $this->source); })()), "user", [], "any", false, false, false, 17), "username", [], "any", false, false, false, 17), "html", null, true);
            echo ", <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Logout</a>
        </div>
    ";
        }
        // line 20
        echo "    <div class=\"form-group col-lg-12\">
        <input type=\"email\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 21, $this->source); })()), "html", null, true);
        echo "\" placeholder=\"Enter email\" name=\"email\" id=\"inputEmail\" class=\"form-control\" required autofocus>
        <br/>
        <input type=\"password\" name=\"password\" id=\"inputPassword\" placeholder=\"Enter password\" class=\"form-control\" required>
        <br/>
    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">
    <button class=\"btn btn-success\" type=\"submit\">
        Sign in
    </button>
    </div>
</form>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 25,  110 => 21,  107 => 20,  99 => 17,  96 => 16,  94 => 15,  91 => 14,  85 => 11,  82 => 10,  80 => 9,  75 => 8,  65 => 7,  55 => 32,  53 => 7,  46 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% include 'main/header.html.twig' %}

<div class=\"col-lg-12\">
    <h5 class=\"text-center\">Log in!</h5>
</div>

{% block body %}
<form  action=\"{{ path('login') }}\" method=\"post\">
    {% if error %}
        <div class=\"alert alert-danger\">
            <h4 class=\"text-center\">{{ error.messageKey|trans(error.messageData, 'security') }}</h4>
        </div>
    {% endif %}

    {% if app.user %}
        <div class=\"mb-3\">
            You are logged in as {{ app.user.username }}, <a href=\"{{ path('app_logout') }}\">Logout</a>
        </div>
    {% endif %}
    <div class=\"form-group col-lg-12\">
        <input type=\"email\" value=\"{{ last_username }}\" placeholder=\"Enter email\" name=\"email\" id=\"inputEmail\" class=\"form-control\" required autofocus>
        <br/>
        <input type=\"password\" name=\"password\" id=\"inputPassword\" placeholder=\"Enter password\" class=\"form-control\" required>
        <br/>
    <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">
    <button class=\"btn btn-success\" type=\"submit\">
        Sign in
    </button>
    </div>
</form>
{% endblock %}
{% include 'main/footer.html.twig' %}
", "security/login.html.twig", "/var/www/symfony/templates/security/login.html.twig");
    }
}
