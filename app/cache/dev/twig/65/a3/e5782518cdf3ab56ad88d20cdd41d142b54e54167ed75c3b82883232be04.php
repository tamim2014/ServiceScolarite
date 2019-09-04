<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_65a3e5782518cdf3ab56ad88d20cdd41d142b54e54167ed75c3b82883232be04 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TwigBundle::layout.html.twig");

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/framework/css/exception.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message"), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        // line 12
        echo "    ";
        $this->env->loadTemplate("TwigBundle:Exception:exception.html.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 12,  54 => 11,  43 => 8,  361 => 150,  352 => 147,  345 => 146,  337 => 144,  333 => 143,  329 => 142,  325 => 141,  321 => 140,  317 => 139,  314 => 138,  310 => 137,  293 => 123,  286 => 119,  282 => 118,  278 => 117,  274 => 116,  266 => 111,  262 => 110,  258 => 109,  254 => 108,  246 => 103,  242 => 102,  238 => 101,  234 => 100,  226 => 95,  222 => 94,  218 => 93,  214 => 92,  207 => 88,  202 => 85,  186 => 70,  180 => 69,  173 => 65,  168 => 63,  163 => 61,  158 => 59,  153 => 57,  148 => 55,  143 => 53,  137 => 49,  134 => 48,  130 => 47,  124 => 44,  120 => 43,  116 => 42,  112 => 41,  108 => 40,  104 => 39,  100 => 38,  96 => 37,  92 => 36,  88 => 35,  69 => 19,  65 => 18,  59 => 14,  56 => 13,  49 => 8,  45 => 7,  40 => 7,  33 => 4,  30 => 3,);
    }
}
