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

/* template.html.twig */
class __TwigTemplate_9f33e17ac488d83b9b0e4637f3d6b6168b4cad618a86480e210904faead74fb5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        // line 7
        echo "</title>
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl\" crossorigin=\"anonymous\">
</head>
<body>

    <main class=\"container\">
        ";
        // line 13
        $this->displayBlock('body', $context, $blocks);
        // line 15
        echo "        <p>Test</p>
    </main>
</body>
</html>
";
    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " ";
    }

    // line 13
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        echo "        ";
    }

    public function getTemplateName()
    {
        return "template.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  77 => 14,  73 => 13,  66 => 6,  58 => 15,  56 => 13,  48 => 7,  46 => 6,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "template.html.twig", "/Users/marclassort/PHP/Blog-PHP/src/view/template.html.twig");
    }
}
