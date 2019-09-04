<?php

/* ServicesScolariteBundle:Default:listEleve.html.twig */
class __TwigTemplate_b431d59a700dcd4f8846e5ffeb43686b7aab6a602615917b419aa000b53c0874 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'stylesheets' => array($this, 'block_stylesheets'),
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
    public function block_head($context, array $blocks = array())
    {
        // line 3
        echo "    ";
        $this->displayBlock('stylesheets', $context, $blocks);
    }

    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        echo "        <link rel=\"icon\" sizes=\"16x16\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/servicesscolarite/css/essai2.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/servicesscolarite/css/bootstrap.min.css"), "html", null, true);
        echo "\" />

    ";
    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        // line 13
        echo "    <!-- <?php require_once (\"entete.php\"); ?>  comment faire cet include avec twig -->
    <div class=\" navbar navbar-inverse navbar-fixed-top\">
        <ul class=\" nav navbar-nav\">
            <li><a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("afficherListEleves");
        echo "\">Etudiant</a></li>
            <li><a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("saisirEleves");
        echo "\">Saisie</a></li>
            <li><a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("authentifier");
        echo "\">LogOut</a></li>
        </ul>
        <form class=\"navbar-form navbar-right\" method=\"post\" action=\"\">
            <input type=\"text\" class=\"form-control\" placeholder=\"Search...\" name=\"motcle\">
        </form>
    </div>
    <div class=\"col-md-12  col-xs-12  decalerEnBas\">

        <div class=\"panel  panel-info EspaceHaut\">
            Etablissement:Public/Privé
            <div class=\"panel-heading\">Liste de élèves</div>
                <div class=\"panel-body\">
                                <table  id=\"test2\" class=\"table  table-striped table-hover \">
                                    <tr>
                                        <th>CODE</th><th>NOM</th><th>EMAIL</th><th>1er Trimestre</th><th>2ème Trimestre</th><th>3ème Trimestre</th><th>Moyenne Annuelle</th><th>PHOTO</th>
                                    </tr>
                                    ";
        // line 34
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["eleves"]) ? $context["eleves"] : $this->getContext($context, "eleves")));
        foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
            // line 35
            echo "                                        <tr>
                                            <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["e"]) ? $context["e"] : $this->getContext($context, "e")), "cODE"), "html", null, true);
            echo "</td>
                                            <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["e"]) ? $context["e"] : $this->getContext($context, "e")), "nomEleve"), "html", null, true);
            echo "</td>
                                            <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["e"]) ? $context["e"] : $this->getContext($context, "e")), "emailEleve"), "html", null, true);
            echo "</td>
                                            <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["e"]) ? $context["e"] : $this->getContext($context, "e")), "trimestre1"), "html", null, true);
            echo "</td>
                                            <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["e"]) ? $context["e"] : $this->getContext($context, "e")), "trimestre2"), "html", null, true);
            echo "</td>
                                            <td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["e"]) ? $context["e"] : $this->getContext($context, "e")), "trimestre3"), "html", null, true);
            echo "</td>
                                            <td>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["e"]) ? $context["e"] : $this->getContext($context, "e")), "moyenneAnnuelle"), "html", null, true);
            echo "</td>
                                            <td> ";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["e"]) ? $context["e"] : $this->getContext($context, "e")), "photoEleve"), "html", null, true);
            echo " </td>
                                            <!-- <td><img src=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["e"]) ? $context["e"] : $this->getContext($context, "e")), "photoEleve"), "html", null, true);
            echo "\"  > </td> -->
                                            <!-- <td><a href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("afficherListEleves", array("photoEleve" => $this->getAttribute((isset($context["e"]) ? $context["e"] : $this->getContext($context, "e")), "photoEleve"))), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("bundles/servicesscolarite/images/" . $this->getAttribute((isset($context["e"]) ? $context["e"] : $this->getContext($context, "e")), "photoEleve"))), "html", null, true);
            echo "\" alt=\"\" > </a> </td> -->
                                        </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "
                                </table>
                </div>
            </div>
        </di>
    </div>
";
    }

    public function getTemplateName()
    {
        return "ServicesScolariteBundle:Default:listEleve.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 48,  134 => 45,  130 => 44,  126 => 43,  122 => 42,  118 => 41,  114 => 40,  110 => 39,  106 => 38,  102 => 37,  98 => 36,  95 => 35,  91 => 34,  72 => 18,  68 => 17,  64 => 16,  59 => 13,  56 => 12,  49 => 6,  45 => 5,  40 => 4,  33 => 3,  30 => 2,);
    }
}
