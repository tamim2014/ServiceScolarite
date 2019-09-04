<?php

/* TwigBundle:Exception:traces.txt.twig */
class __TwigTemplate_c1903054e8f92207620158f447ea93c01fc77f8eb57137a17e04b6205b284f3a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace"))) {
            // line 2
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace"));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->env->loadTemplate("TwigBundle:Exception:trace.txt.twig")->display(array("trace" => (isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace"))));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 14,  38 => 13,  35 => 4,  26 => 5,  87 => 20,  55 => 13,  31 => 5,  25 => 3,  21 => 2,  94 => 22,  89 => 20,  85 => 19,  79 => 18,  75 => 17,  72 => 16,  68 => 14,  64 => 12,  50 => 8,  41 => 9,  24 => 4,  201 => 92,  199 => 91,  196 => 90,  187 => 84,  183 => 82,  171 => 73,  166 => 71,  156 => 66,  151 => 63,  142 => 59,  138 => 57,  136 => 56,  133 => 55,  123 => 47,  121 => 46,  117 => 44,  115 => 43,  105 => 40,  101 => 24,  91 => 31,  86 => 28,  66 => 15,  62 => 23,  51 => 15,  39 => 6,  19 => 1,  98 => 40,  93 => 9,  80 => 19,  78 => 40,  46 => 7,  44 => 10,  36 => 7,  32 => 12,  27 => 4,  22 => 2,  57 => 16,  54 => 21,  43 => 8,  361 => 150,  352 => 147,  345 => 146,  337 => 144,  333 => 143,  329 => 142,  325 => 141,  321 => 140,  317 => 139,  314 => 138,  310 => 137,  293 => 123,  286 => 119,  282 => 118,  278 => 117,  274 => 116,  266 => 111,  262 => 110,  258 => 109,  254 => 108,  246 => 103,  242 => 102,  238 => 101,  234 => 100,  226 => 95,  222 => 94,  218 => 93,  214 => 92,  207 => 88,  202 => 85,  186 => 70,  180 => 69,  173 => 74,  168 => 72,  163 => 70,  158 => 67,  153 => 57,  148 => 55,  143 => 53,  137 => 49,  134 => 48,  130 => 47,  124 => 44,  120 => 43,  116 => 42,  112 => 42,  108 => 40,  104 => 39,  100 => 38,  96 => 37,  92 => 21,  88 => 6,  69 => 25,  65 => 18,  59 => 14,  56 => 9,  49 => 19,  45 => 7,  40 => 8,  33 => 10,  30 => 3,);
    }
}
