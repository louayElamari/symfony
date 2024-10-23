<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* crud_author/library_author.html.twig */
class __TwigTemplate_802951d3444671f4fc7768e170b74edf extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "crud_author/library_author.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "crud_author/library_author.html.twig"));

        // line 1
        yield "


<html>
<head>
    <title>List of Authors</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #ffffff;
        }

        h1 {
            text-align: center;
            color: #000000;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            background-color: white;
        }

        th, td {
            padding: 10px;
            text-align: left;
            border: 1px solid #000000;
        }

        th {
            background-color: #000000;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:nth-child(odd) {
            background-color: #ffffff;
        }

        tr:hover {
            background-color: #d3d3d3;
        }
    </style>







    
</head>
<body>
    <h1>List of Authors</h1>
    ";
        // line 60
        $context["total_books"] = 0;
        // line 61
        yield "    
    <table>
        <tr>
            <th>NAME</th>
            <th>EMAIL</th>
            <th>Number of Books</th>
            <th>ADDRESS</th>
        </tr>
        
       ";
        // line 71
        yield "
<h1>Authors by Library</h1>

";
        // line 74
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 74, $this->source); })()))) {
            // line 75
            yield "    <ul>
        ";
            // line 76
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 76, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["author"]) {
                // line 77
                yield "            <li>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["author"], "name", [], "any", false, false, false, 77), "html", null, true);
                yield " (Library: ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["author"], "library", [], "any", false, false, false, 77), "name", [], "any", false, false, false, 77), "html", null, true);
                yield ")</li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['author'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 79
            yield "    </ul>
";
        } else {
            // line 81
            yield "    <p>No authors found for this library.</p>
";
        }
        // line 83
        yield "    </table>

    
</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "crud_author/library_author.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  155 => 83,  151 => 81,  147 => 79,  136 => 77,  132 => 76,  129 => 75,  127 => 74,  122 => 71,  111 => 61,  109 => 60,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("


<html>
<head>
    <title>List of Authors</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #ffffff;
        }

        h1 {
            text-align: center;
            color: #000000;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            background-color: white;
        }

        th, td {
            padding: 10px;
            text-align: left;
            border: 1px solid #000000;
        }

        th {
            background-color: #000000;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:nth-child(odd) {
            background-color: #ffffff;
        }

        tr:hover {
            background-color: #d3d3d3;
        }
    </style>







    
</head>
<body>
    <h1>List of Authors</h1>
    {% set total_books = 0 %}
    
    <table>
        <tr>
            <th>NAME</th>
            <th>EMAIL</th>
            <th>Number of Books</th>
            <th>ADDRESS</th>
        </tr>
        
       {# templates/crud_author/list.html.twig #}

<h1>Authors by Library</h1>

{% if list is not empty %}
    <ul>
        {% for author in list %}
            <li>{{ author.name }} (Library: {{ author.library.name }})</li>
        {% endfor %}
    </ul>
{% else %}
    <p>No authors found for this library.</p>
{% endif %}
    </table>

    
</body>
</html>
", "crud_author/library_author.html.twig", "C:\\Users\\ADMIN\\Desktop\\3A23\\web\\projet 1\\my_web\\templates\\crud_author\\library_author.html.twig");
    }
}
