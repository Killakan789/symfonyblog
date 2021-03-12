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

/* admin/index.html.twig */
class __TwigTemplate_5e4f6c15891836cc772a04e87087ddbf71a30b165b725ac11345312e9b86d80a extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        // line 1
        $this->loadTemplate("main/header.html.twig", "admin/index.html.twig", 1)->display($context);
        // line 2
        echo "<div class=\"row\">
    <div class=\"col-lg-3 col-md-3 col-sm-12 col-xs-12\" style=\"margin-top: 20px;\">
        <div class=\"bg-light border-right\" id=\"sidebar-wrapper\">
            <div class=\"list-group list-group-flush\">
                <div class=\"dropdown\">
                    <button style=\"width: 100%\" class=\"btn btn-secondary dropdown-toggle\" type=\"button\" id=\"dropdownMenuButton\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        Blog
                    </button>
                    <div style=\"width:100%;\" class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton\">
                        <a class=\"dropdown-item text-center\" href=\"/admin/blog/\">List</a>
                        <a class=\"dropdown-item text-center\" href=\"/admin/blog/add\">Add</a>
                    </div>
                </div>
                <div class=\"dropdown\">
                    <button style=\"width: 100%\" class=\"btn btn-secondary dropdown-toggle\" type=\"button\" id=\"dropdownMenuButton\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        Blog categories
                    </button>
                    <div style=\"width:100%;\" class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton\">
                        <a class=\"dropdown-item text-center\" href=\"/admin/blog/category/\">List</a>
                        <a class=\"dropdown-item text-center\" href=\"/admin/blog/category/add\">Add</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"col-lg-9 col-md-9 col-sm-12 col-xs-12\" style=\"margin-top:20px;\">
        <div class=\"row\">
            <div class=\"col-lg-4 col-md-4 col-sm-12 col-xs-12\">
                <div class=\"card\" style=\"width: 18rem;\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">Blog articles</h5>
                        <h5>";
        // line 33
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 33, $this->source); })())), "html", null, true);
        echo "</h5>
                        <a href=\"/admin/blog\">Show</a>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-4 col-md-4 col-sm-12 col-xs-12\">
                <div class=\"card\" style=\"width: 18rem;\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">Blog categories</h5>
                        <h5>";
        // line 42
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 42, $this->source); })())), "html", null, true);
        echo "</h5>
                        <a href=\"/admin/.blog/categories\">Show</a>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-4 col-md-4 col-sm-12 col-xs-12\">
                <div class=\"card\" style=\"width: 18rem;\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">Users</h5>
                        <h5>";
        // line 51
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 51, $this->source); })())), "html", null, true);
        echo "</h5>
                        <a href=\"/admin/users\">Show</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
";
        // line 59
        $this->loadTemplate("main/footer.html.twig", "admin/index.html.twig", 59)->display($context);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "admin/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 59,  102 => 51,  90 => 42,  78 => 33,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% include 'main/header.html.twig' %}
<div class=\"row\">
    <div class=\"col-lg-3 col-md-3 col-sm-12 col-xs-12\" style=\"margin-top: 20px;\">
        <div class=\"bg-light border-right\" id=\"sidebar-wrapper\">
            <div class=\"list-group list-group-flush\">
                <div class=\"dropdown\">
                    <button style=\"width: 100%\" class=\"btn btn-secondary dropdown-toggle\" type=\"button\" id=\"dropdownMenuButton\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        Blog
                    </button>
                    <div style=\"width:100%;\" class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton\">
                        <a class=\"dropdown-item text-center\" href=\"/admin/blog/\">List</a>
                        <a class=\"dropdown-item text-center\" href=\"/admin/blog/add\">Add</a>
                    </div>
                </div>
                <div class=\"dropdown\">
                    <button style=\"width: 100%\" class=\"btn btn-secondary dropdown-toggle\" type=\"button\" id=\"dropdownMenuButton\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        Blog categories
                    </button>
                    <div style=\"width:100%;\" class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton\">
                        <a class=\"dropdown-item text-center\" href=\"/admin/blog/category/\">List</a>
                        <a class=\"dropdown-item text-center\" href=\"/admin/blog/category/add\">Add</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"col-lg-9 col-md-9 col-sm-12 col-xs-12\" style=\"margin-top:20px;\">
        <div class=\"row\">
            <div class=\"col-lg-4 col-md-4 col-sm-12 col-xs-12\">
                <div class=\"card\" style=\"width: 18rem;\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">Blog articles</h5>
                        <h5>{{ articles|length }}</h5>
                        <a href=\"/admin/blog\">Show</a>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-4 col-md-4 col-sm-12 col-xs-12\">
                <div class=\"card\" style=\"width: 18rem;\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">Blog categories</h5>
                        <h5>{{ categories|length }}</h5>
                        <a href=\"/admin/.blog/categories\">Show</a>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-4 col-md-4 col-sm-12 col-xs-12\">
                <div class=\"card\" style=\"width: 18rem;\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">Users</h5>
                        <h5>{{ users|length }}</h5>
                        <a href=\"/admin/users\">Show</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{% include 'main/footer.html.twig' %}", "admin/index.html.twig", "/var/www/symfony/templates/admin/index.html.twig");
    }
}
