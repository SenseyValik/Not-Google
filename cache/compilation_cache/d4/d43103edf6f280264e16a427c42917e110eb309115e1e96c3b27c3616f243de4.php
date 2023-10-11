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

/* index.html */
class __TwigTemplate_e40da25d913677611d7f1e255f8bc0f7f38a9b45e1871423bd26885c669c61ae extends Template
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
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <link rel=\"icon\" type=\"image/x-icon\" href=\"/images/notGoogleIcon.ico\">
    <title>Not google</title>
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css\">
    <script src=\"https://code.jquery.com/jquery-3.7.1.min.js\" integrity=\"sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=\" crossorigin=\"anonymous\"></script>
    <link rel=\"stylesheet\" href=\"resources/css/styles.css\">
</head>

<body>
<div class=\"container\">
    <div class=\"google-logo\">
        <h1>Mindes Keep</h1> </div>
    <div class=\"search-container\">
        <form action=\"search.php\" method=\"GET\">
            <input type=\"text\" class=\"search-box\" name=\"request\" title=\"Search\" autofocus required>
            <div>
                <input type=\"submit\" class=\"search-button\" value=\"Remind\">
                <input type=\"submit\" class=\"search-button\" value=\"+\">
            </div>
        </form>
    </div>
</div>
<script src=\"https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js\"></script>
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js\"></script>
</body>

</html>";
    }

    public function getTemplateName()
    {
        return "index.html";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "index.html", "E:\\OSPanel\\domains\\not-google\\resources\\twing_templates\\index.html");
    }
}
