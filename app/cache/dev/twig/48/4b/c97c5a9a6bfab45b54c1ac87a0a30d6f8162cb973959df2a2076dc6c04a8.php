<?php

/* ServicesScolariteBundle:Default:addEleve.html.twig */
class __TwigTemplate_484bc97c5a9a6bfab45b54c1ac87a0a30d6f8162cb973959df2a2076dc6c04a8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "    <table border=\"1\">
        <tr>
            <th>CODE</th><th>NOM</th><th>EMAIL</th><th>PHOTO</th>
        </tr>
        ";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["eleve"]) ? $context["eleve"] : $this->getContext($context, "eleve")));
        foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
            // line 8
            echo "            <tr>
                <td>";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["e"]) ? $context["e"] : $this->getContext($context, "e")), "cODE"), "html", null, true);
            echo "</td>
                <td>";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["e"]) ? $context["e"] : $this->getContext($context, "e")), "nomEleve"), "html", null, true);
            echo "</td>
                <td>";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["e"]) ? $context["e"] : $this->getContext($context, "e")), "emalEleve"), "html", null, true);
            echo "</td>
                <td>";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["e"]) ? $context["e"] : $this->getContext($context, "e")), "photoEleve"), "html", null, true);
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "
    </table>
";
    }

    public function getTemplateName()
    {
        return "ServicesScolariteBundle:Default:addEleve.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 15,  56 => 12,  52 => 11,  48 => 10,  44 => 9,  41 => 8,  37 => 7,  31 => 3,  28 => 2,);
    }
}
