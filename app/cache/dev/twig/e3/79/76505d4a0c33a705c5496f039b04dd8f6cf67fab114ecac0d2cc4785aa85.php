<?php

/* ServicesScolariteBundle:Default:listEleve.html.twig */
class __TwigTemplate_e37976505d4a0c33a705c5496f039b04dd8f6cf67fab114ecac0d2cc4785aa85 extends Twig_Template
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
                <!-- fav-icon -->
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
               <!-- icon \"fa fa-search\" -->
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
        <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/servicesscolarite/css/search_bar.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/servicesscolarite/css/essai2.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/servicesscolarite/css/bootstrap.min.css"), "html", null, true);
        echo "\" />

    ";
    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        // line 18
        echo "    <!-- <?php require_once (\"entete.php\"); ?>  comment faire cet include avec twig -->
    <div class=\" navbar navbar-inverse navbar-fixed-top\">
        <ul class=\" nav navbar-nav\">
            <li><a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("afficherListEleves");
        echo "\">Etudiant</a></li>
            <li><a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("saisirEleves");
        echo "\">Saisie</a></li>
            <li><a href=\"LogOut.php\">LogOut</a></li>
        </ul>
        <div class=\"search-container\">
            <form action=\"/action_page.php\">
              <input type=\"text\" placeholder=\"Rechercher\" name=\"search\">
              <button type=\"submit\"><i class=\"fa fa-search\"></i></button>
            </form>
        </div>
    </div>
    <div class=\"col-md-12  col-xs-12  decalerEnBas\">

        <div class=\"panel  panel-info EspaceHaut\">
            Etablissement:Public/Privé
            <div class=\"panel-heading\">Liste de élèves</div>
                <div class=\"panel-body\">
                                <table  id=\"test2\" class=\"table  table-striped\">
                                    <tr>
                                        <th>CODE</th><th>NOM</th><th>EMAIL</th><th>PHOTO</th>
                                    </tr>
                                    ";
        // line 42
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["eleves"]) ? $context["eleves"] : $this->getContext($context, "eleves")));
        foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
            // line 43
            echo "                                        <tr>
                                            <td>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["e"]) ? $context["e"] : $this->getContext($context, "e")), "cODE"), "html", null, true);
            echo "</td>
                                            <td>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["e"]) ? $context["e"] : $this->getContext($context, "e")), "nomEleve"), "html", null, true);
            echo "</td>
                                            <td>";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["e"]) ? $context["e"] : $this->getContext($context, "e")), "emailEleve"), "html", null, true);
            echo "</td>
                                            <td> ";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["e"]) ? $context["e"] : $this->getContext($context, "e")), "photoEleve"), "html", null, true);
            echo " </td>
                                            <!-- <td><img src=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["e"]) ? $context["e"] : $this->getContext($context, "e")), "photoEleve"), "html", null, true);
            echo "\"  > </td> -->
                                            <!-- <td><a href=\"";
            // line 49
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
        // line 53
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
        return array (  138 => 53,  126 => 49,  122 => 48,  118 => 47,  114 => 46,  110 => 45,  106 => 44,  103 => 43,  99 => 42,  76 => 22,  72 => 21,  67 => 18,  64 => 17,  57 => 11,  53 => 10,  49 => 9,  40 => 4,  33 => 3,  30 => 2,);
    }
}
