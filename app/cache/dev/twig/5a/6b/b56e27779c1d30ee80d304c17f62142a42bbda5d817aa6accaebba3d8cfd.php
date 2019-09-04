<?php

/* base.html.twig */
class __TwigTemplate_5a6bb56e27779c1d30ee80d304c17f62142a42bbda5d817aa6accaebba3d8cfd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 10,  53 => 5,  47 => 12,  44 => 11,  42 => 10,  35 => 7,  29 => 5,  23 => 1,  233 => 93,  222 => 88,  215 => 87,  211 => 86,  207 => 85,  203 => 84,  199 => 83,  195 => 82,  192 => 81,  188 => 80,  171 => 66,  164 => 62,  160 => 61,  156 => 60,  152 => 59,  144 => 54,  140 => 53,  136 => 52,  132 => 51,  124 => 46,  120 => 45,  116 => 44,  112 => 43,  104 => 38,  100 => 37,  96 => 36,  92 => 35,  85 => 31,  80 => 28,  69 => 11,  65 => 18,  59 => 6,  56 => 13,  49 => 8,  45 => 7,  40 => 6,  33 => 6,  30 => 4,);
    }
}
