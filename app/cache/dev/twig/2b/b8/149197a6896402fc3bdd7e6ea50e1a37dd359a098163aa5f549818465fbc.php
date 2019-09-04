<?php

/* ServicesScolariteBundle:Default:saisieEtudiant.html.twig */
class __TwigTemplate_2bb8149197a6896402fc3bdd7e6ea50e1a37dd359a098163aa5f549818465fbc extends Twig_Template
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
        // line 21
        echo $this->env->getExtension('routing')->getPath("afficherListEleves");
        echo "\">Etudiant</a></li>
            <li><a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("saisirEleves");
        echo "\">Saisie</a></li>
            <li><a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("authentifier");
        echo "\">LogOut</a></li>
        </ul>
        <form class=\"navbar-form navbar-right\" method=\"post\" action=\"\">
            <input type=\"text\" class=\"form-control\" placeholder=\"Search...\" name=\"motcle\">
        </form>
    </div>

    <div class=\"container  decalerEnBas  \">
        <div class=\"panel  panel-info  \" >
        Etablissement:Public/Privé
        <div class=\"panel-heading \">Liste de élèves</div>
        <div class=\"panel-body\">
                    <div class=\"col-md-12  col-xs-12  \">
                    <table class=\"table table-striped table-bordered table-hover \">
                        <tr>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th class=\"centrer_elt\">PHOTO</th>
                            <th class=\"centrer_elt\">Delet</th>
                            <th class=\"centrer_elt\">Edit</th>
                        </tr>
                        <tr style=\"background-color: #999999\">
                            ";
        // line 50
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), 'form_start');
        echo "
                            <td> ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "cODE"), 'widget');
        echo " </td>
                            <td> ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "nomEleve"), 'widget');
        echo " </td>
                            <td>";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "emailEleve"), 'widget');
        echo "</td>
                            <td>";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "trimestre1"), 'widget');
        echo "</td>
                            <td>";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "trimestre2"), 'widget');
        echo "</td>
                            <td>";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "trimestre3"), 'widget');
        echo "</td>
                            <td>";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "moyenneAnnuelle"), 'widget');
        echo "</td>
                            <td id=\"largeur_champs_photo\">";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "photoEleve"), 'widget');
        echo "</td>
                            <td>  </td>
                            <td class=\"centrer_elt\"> ";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "Enregistrer"), 'widget', array("label" => "+"));
        echo " </td>

                            ";
        // line 62
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), 'form_end');
        echo "
                        </tr>

                        ";
        // line 65
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listedeseleves"]) ? $context["listedeseleves"] : $this->getContext($context, "listedeseleves")));
        foreach ($context['_seq'] as $context["_key"] => $context["elv"]) {
            // line 66
            echo "
                                <tr>
                                    <td>";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["elv"]) ? $context["elv"] : $this->getContext($context, "elv")), "cODE"), "html", null, true);
            echo "</td>
                                    <td>";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["elv"]) ? $context["elv"] : $this->getContext($context, "elv")), "nomEleve"), "html", null, true);
            echo "</td>
                                    <td>";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["elv"]) ? $context["elv"] : $this->getContext($context, "elv")), "emailEleve"), "html", null, true);
            echo "</td>
                                    <td>";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["elv"]) ? $context["elv"] : $this->getContext($context, "elv")), "trimestre1"), "html", null, true);
            echo "</td>
                                    <td>";
            // line 72
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["elv"]) ? $context["elv"] : $this->getContext($context, "elv")), "trimestre2"), "html", null, true);
            echo "</td>
                                    <td>";
            // line 73
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["elv"]) ? $context["elv"] : $this->getContext($context, "elv")), "trimestre3"), "html", null, true);
            echo "</td>
                                   <!-- <td>";
            // line 74
            echo twig_escape_filter($this->env, ((($this->getAttribute((isset($context["elv"]) ? $context["elv"] : $this->getContext($context, "elv")), "trimestre1") + $this->getAttribute((isset($context["elv"]) ? $context["elv"] : $this->getContext($context, "elv")), "trimestre2")) + $this->getAttribute((isset($context["elv"]) ? $context["elv"] : $this->getContext($context, "elv")), "trimestre3")) / 3), "html", null, true);
            echo "</td> -->
                                    <td>";
            // line 75
            echo twig_escape_filter($this->env, ((($this->getAttribute((isset($context["elv"]) ? $context["elv"] : $this->getContext($context, "elv")), "trimestre1") + $this->getAttribute((isset($context["elv"]) ? $context["elv"] : $this->getContext($context, "elv")), "trimestre2")) + $this->getAttribute((isset($context["elv"]) ? $context["elv"] : $this->getContext($context, "elv")), "trimestre3")) / 3), "html", null, true);
            echo "</td>
                                    <td class=\"centrer_elt\"><img src=\"";
            // line 76
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("bundles/servicesscolarite/images/" . $this->getAttribute((isset($context["elv"]) ? $context["elv"] : $this->getContext($context, "elv")), "photoEleve"))), "html", null, true);
            echo "\" width=\"40\" height=\"30\"/></td>
                                    <td class=\"centrer_elt\"><a href=\"";
            // line 77
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("page_delet", array("id" => $this->getAttribute((isset($context["elv"]) ? $context["elv"] : $this->getContext($context, "elv")), "id"))), "html", null, true);
            echo "\" onclick=\"return confirm('Etes vous sûr...?')\" ><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/servicesscolarite/images/delet.jpeg"), "html", null, true);
            echo "\" width=\"20\"  height=\"20\"/> </a></td>
                                    <td class=\"centrer_elt\"><a href=\"";
            // line 78
            echo $this->env->getExtension('routing')->getPath("page_modif");
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["elv"]) ? $context["elv"] : $this->getContext($context, "elv")), "id"), "html", null, true);
            echo "/";
            echo "edit";
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/servicesscolarite/images/edit.jpeg"), "html", null, true);
            echo "\" width=\"20\"  height=\"20\"/></a></td>
                                </tr>

                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['elv'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        echo "                    </table>
                    </div><!-- col-md-12  col-xs-12 -->

            </div><!-- panel-body -->
            </div><!-- panel-info -->
    </div><!-- container -->

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
        return array (  219 => 82,  204 => 78,  198 => 77,  194 => 76,  190 => 75,  186 => 74,  182 => 73,  178 => 72,  174 => 71,  170 => 70,  166 => 69,  162 => 68,  158 => 66,  154 => 65,  148 => 62,  143 => 60,  138 => 58,  134 => 57,  130 => 56,  126 => 55,  122 => 54,  118 => 53,  114 => 52,  110 => 51,  106 => 50,  76 => 23,  72 => 22,  68 => 21,  59 => 14,  56 => 13,  49 => 8,  45 => 7,  40 => 6,  33 => 5,  30 => 4,);
    }
}
