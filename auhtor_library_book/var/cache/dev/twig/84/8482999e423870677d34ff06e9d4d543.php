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

/* author/listAuthors.html.twig */
class __TwigTemplate_86e02d9a45d9b3572fc2ddc171e273a6 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "author/listAuthors.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "author/listAuthors.html.twig"));

        // line 1
        yield "<html>
    <head>
        <title><centre> list of Authors</centre></title>
    </head>

    <body>
        ";
        // line 7
        $context["total_books"] = 0;
        // line 8
        yield "        

        <table>
            <tr>
                <th> Name :</th>
                <th> Image : </th>  
                <th>Nbrs Books : </th>
            </tr>

            <tr ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["authors"]) || array_key_exists("authors", $context) ? $context["authors"] : (function () { throw new RuntimeError('Variable "authors" does not exist.', 17, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["author"]) {
            yield ">
                ";
            // line 18
            $context["total_books"] = ((isset($context["total_books"]) || array_key_exists("total_books", $context) ? $context["total_books"] : (function () { throw new RuntimeError('Variable "total_books" does not exist.', 18, $this->source); })()) + CoreExtension::getAttribute($this->env, $this->source, $context["author"], "nbrBooks", [], "any", false, false, false, 18));
            // line 19
            yield "                <td> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["author"], "authorName", [], "any", false, false, false, 19), "html", null, true);
            yield " </td>
                <td> <img src=\" ";
            // line 20
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, $context["author"], "picture", [], "any", false, false, false, 20)), "html", null, true);
            yield " \"></img></td> 
                <td> ";
            // line 21
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["author"], "nbrBooks", [], "any", false, false, false, 21), "html", null, true);
            yield "</td>
            </tr ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['author'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        yield ">
        </table>

        <h1> number of authers : ";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["authors"]) || array_key_exists("authors", $context) ? $context["authors"] : (function () { throw new RuntimeError('Variable "authors" does not exist.', 25, $this->source); })())), "html", null, true);
        yield " </h1>
        <h1> total number of books : ";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["total_books"]) || array_key_exists("total_books", $context) ? $context["total_books"] : (function () { throw new RuntimeError('Variable "total_books" does not exist.', 26, $this->source); })()), "html", null, true);
        yield " </h1>
       
    </body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "author/listAuthors.html.twig";
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
        return array (  103 => 26,  99 => 25,  94 => 22,  86 => 21,  82 => 20,  77 => 19,  75 => 18,  69 => 17,  58 => 8,  56 => 7,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<html>
    <head>
        <title><centre> list of Authors</centre></title>
    </head>

    <body>
        {% set total_books =0%}
        

        <table>
            <tr>
                <th> Name :</th>
                <th> Image : </th>  
                <th>Nbrs Books : </th>
            </tr>

            <tr {% for author in authors %}>
                {% set total_books=total_books + author.nbrBooks %}
                <td> {{ author.authorName }} </td>
                <td> <img src=\" {{ asset(author.picture) }} \"></img></td> 
                <td> {{ author.nbrBooks }}</td>
            </tr {% endfor %}>
        </table>

        <h1> number of authers : {{ authors | length}} </h1>
        <h1> total number of books : {{ total_books }} </h1>
       
    </body>
</html>", "author/listAuthors.html.twig", "C:\\Users\\ADMIN\\Desktop\\3A23\\web\\projet 1\\my_web\\templates\\author\\listAuthors.html.twig");
    }
}
