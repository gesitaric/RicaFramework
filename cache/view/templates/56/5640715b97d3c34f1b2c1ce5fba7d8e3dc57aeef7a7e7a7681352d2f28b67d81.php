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

/* welcome.html.twig */
class __TwigTemplate_3ffc072da0673f8ac3f004cbfd67f496ecd6b7a32c3088a8d014a78639ee8473 extends \Twig\Template
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
        // line 1
        echo "<!doctype html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>Bootstrap 101 Template</title>
    <link rel =\"stylesheet\" href=\"vendor/twbs/bootstrap/dist/css/bootstrap.min.css\">
</head>

<body>
    <div class=\"container\">
        <img src=\"view/resources/images/twitter_header_photo_2.png\" class=\"img-fluid\" alt=\"logo\">
    </div>

    <script src=\"vendor/components/jquery/jquery.min.js\"></script>
    <script src=\"vendor/twbs/bootstrap/dist/js/bootstrap.min.js\"></script>
</body>

</html>";
    }

    public function getTemplateName()
    {
        return "welcome.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "welcome.html.twig", "/Users/italoricardogeske/RicaFramework/view/templates/welcome.html.twig");
    }
}
