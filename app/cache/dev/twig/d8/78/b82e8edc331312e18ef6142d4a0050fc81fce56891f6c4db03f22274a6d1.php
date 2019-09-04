<?php

/* ServicesScolariteBundle:Default:saisieEtudiant.html.twig */
class __TwigTemplate_d878b82e8edc331312e18ef6142d4a0050fc81fce56891f6c4db03f22274a6d1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("base.html.twig");

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        // line 5
        echo "    ";
        $this->displayBlock('stylesheets', $context, $blocks);
    }

    public function block_stylesheets($context, array $blocks = array())
    {
        // line 6
        echo "        <link rel=\"icon\" sizes=\"16x16\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/servicesscolarite/css/essai2.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/servicesscolarite/css/bootstrap.min.css"), "html", null, true);
        echo "\" />

    ";
    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        // line 14
        echo "
    <!-- <?php require_once (\"entete.php\"); ?>  comment faire cet include avec twig -->
    <div class=\" navbar navbar-inverse navbar-fixed-top\">
        <ul class=\" nav navbar-nav\">
            <li><a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("afficherListEleves");
        echo "\">Etudiant</a></li>
            <li><a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("saisirEleves");
        echo "\">Saisie</a></li>
            <li><a href=\"LogOut.php\">LogOut</a></li>
        </ul>
    </div>
    <div class=\"container  decalerEnBas  \">


            <div class=\"col-md-12  col-xs-12  \">
                ";
        // line 28
        echo "                <!-- <div style=\"margin-left:20px;\" class=\"form-control-feedback\"> le formulaire à droite de la table -->
                <div  class=\"form-group-lg  form-control-static   panel panel-\" >

                    ";
        // line 31
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), 'form_start');
        echo "
                    <table  >
                        <div class=\"form-group\" >
                            <tr >
                              <!--  <td class=\"control-label\">";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "cODE"), 'label', array("label" => "Code "));
        echo "</td> -->
                                <td>";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "cODE"), 'widget');
        echo "</td>
                                <td>";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "cODE"), 'errors');
        echo "</td>
                                <td>";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "cODE"), 'enctype');
        echo "</td>
                            </tr>
                        </div>
                        <div class=\"form-group\" >
                            <tr >
                             <!--    <td class=\"control-label\">";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "nomEleve"), 'label', array("label" => "Nom "));
        echo "</td> -->
                                <td>";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "nomEleve"), 'widget');
        echo "</td>
                                <td>";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "nomEleve"), 'errors');
        echo "</td>
                                <td>";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "nomEleve"), 'enctype');
        echo "</td>
                            </tr>
                        </div>
                        <div class=\"form-group\" >
                            <tr>
                              <!--   <td class=\"control-label\">";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "emailEleve"), 'label', array("label" => "Email"));
        echo "</td> -->
                                <td>";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "emailEleve"), 'widget');
        echo "</td>
                                <td>";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "emailEleve"), 'errors');
        echo "</td>
                                <td>";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "emailEleve"), 'enctype');
        echo "</td>
                            </tr >
                        </div>
                        <div class=\"form-group\" >
                            <tr >
                                <!--   <td class=\"control-label\" >";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "photoEleve"), 'label', array("label" => "Photo  "));
        echo "</td> -->
                                <td>";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "photoEleve"), 'widget');
        echo "</td>
                                <td>";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "photoEleve"), 'errors');
        echo "</td>
                                <!--   <td>";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "photoEleve"), 'enctype');
        echo "</td> -->
                            </tr>
                        </div>
                    </table>
                    ";
        // line 66
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), 'form_end');
        echo "
                </div>



                <div class=\"panel  panel-info \" >
                Etablissement:Public/Privé
                    <div class=\"panel-heading\">Liste de élèves</div>
                        <div class=\"panel-body\">

                            <table id=\"test2\" class=\"table  table-striped\">
                                <tr>
                                    <th>CODE</th><th>NOM</th><th>EMAIL</th><th>PHOTO</th><th></th><th></th>
                                </tr>
                                ";
        // line 80
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listedeseleves"]) ? $context["listedeseleves"] : $this->getContext($context, "listedeseleves")));
        foreach ($context['_seq'] as $context["_key"] => $context["elv"]) {
            // line 81
            echo "                                    <tr>
                                        <td>";
            // line 82
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["elv"]) ? $context["elv"] : $this->getContext($context, "elv")), "cODE"), "html", null, true);
            echo "</td>
                                        <td>";
            // line 83
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["elv"]) ? $context["elv"] : $this->getContext($context, "elv")), "nomEleve"), "html", null, true);
            echo "</td>
                                        <td>";
            // line 84
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["elv"]) ? $context["elv"] : $this->getContext($context, "elv")), "emailEleve"), "html", null, true);
            echo "</td>
                                        <!--<td><img src=\"images/";
            // line 85
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["elv"]) ? $context["elv"] : $this->getContext($context, "elv")), "photoEleve"), "html", null, true);
            echo "\" width=\"40\" height=\"30\"/></td> -->
                                        <td><img src=\"";
            // line 86
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("bundles/servicesscolarite/images/" . $this->getAttribute((isset($context["elv"]) ? $context["elv"] : $this->getContext($context, "elv")), "photoEleve"))), "html", null, true);
            echo "\" width=\"40\" height=\"30\"/></td>
                                        <td><a href=\"";
            // line 87
            echo $this->env->getExtension('routing')->getPath("page_modif");
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["elv"]) ? $context["elv"] : $this->getContext($context, "elv")), "id"), "html", null, true);
            echo "/";
            echo "edit";
            echo "\">Edit</a></td>
                                        <!--  onclick=\"return confirm('Etes vous sûr...?')\"  -->
                                        <!-- <td><a href=\"";
            // line 89
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("page_delet", array("id" => $this->getAttribute((isset($context["elv"]) ? $context["elv"] : $this->getContext($context, "elv")), "id"))), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["elv"]) ? $context["elv"] : $this->getContext($context, "elv")), "id"), "html", null, true);
            echo "/";
            echo "delet";
            echo "\">Supprimer</a></td> -->
                                        <td><a href=\"";
            // line 90
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("page_delet", array("id" => $this->getAttribute((isset($context["elv"]) ? $context["elv"] : $this->getContext($context, "elv")), "id"))), "html", null, true);
            echo "\">Supprimer</a></td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['elv'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 93
        echo "                            </table>
                        </div>
                    </div>
                </div>
            </div>

    </div>
";
    }

    public function getTemplateName()
    {
        return "ServicesScolariteBundle:Default:saisieEtudiant.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  239 => 93,  230 => 90,  223 => 89,  215 => 87,  211 => 86,  207 => 85,  203 => 84,  199 => 83,  195 => 82,  192 => 81,  188 => 80,  171 => 66,  164 => 62,  160 => 61,  156 => 60,  152 => 59,  144 => 54,  140 => 53,  136 => 52,  132 => 51,  124 => 46,  120 => 45,  116 => 44,  112 => 43,  104 => 38,  100 => 37,  96 => 36,  92 => 35,  85 => 31,  80 => 28,  69 => 19,  65 => 18,  59 => 14,  56 => 13,  49 => 8,  45 => 7,  40 => 6,  33 => 5,  30 => 4,);
    }
}
