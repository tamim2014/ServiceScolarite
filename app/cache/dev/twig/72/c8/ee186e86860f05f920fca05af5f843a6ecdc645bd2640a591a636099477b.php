<?php

/* ServicesScolariteBundle:Default:saisieEtudiant.html.twig */
class __TwigTemplate_72c8ee186e86860f05f920fca05af5f843a6ecdc645bd2640a591a636099477b extends Twig_Template
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
                            <th class=\"centrer_elt\">PHOTO</th>
                            <th class=\"centrer_elt\">Delet</th>
                            <th class=\"centrer_elt\">Edit</th>
                        </tr>
                        <tr style=\"background-color: #999999\">
                            ";
        // line 40
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), 'form_start');
        echo "
                            <td> ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "cODE"), 'widget');
        echo " </td>
                            <td> ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "nomEleve"), 'widget');
        echo " </td>
                            <td>";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "emailEleve"), 'widget');
        echo "</td>
                            <td id=\"largeur_champs_photo\">";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "photoEleve"), 'widget');
        echo "</td>
                            <td>  </td>
                            <td class=\"centrer_elt\"> ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "Enregistrer"), 'widget', array("label" => "+"));
        echo " </td>

                            ";
        // line 48
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), 'form_end');
        echo "
                        </tr>

                        ";
        // line 51
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listedeseleves"]) ? $context["listedeseleves"] : $this->getContext($context, "listedeseleves")));
        foreach ($context['_seq'] as $context["_key"] => $context["elv"]) {
            // line 52
            echo "
                                <tr>
                                    <td>";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["elv"]) ? $context["elv"] : $this->getContext($context, "elv")), "cODE"), "html", null, true);
            echo "</td>
                                    <td>";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["elv"]) ? $context["elv"] : $this->getContext($context, "elv")), "nomEleve"), "html", null, true);
            echo "</td>
                                    <td>";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["elv"]) ? $context["elv"] : $this->getContext($context, "elv")), "emailEleve"), "html", null, true);
            echo "</td>
                                    <td class=\"centrer_elt\"><img src=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("bundles/servicesscolarite/images/" . $this->getAttribute((isset($context["elv"]) ? $context["elv"] : $this->getContext($context, "elv")), "photoEleve"))), "html", null, true);
            echo "\" width=\"40\" height=\"30\"/></td>
                                    <td class=\"centrer_elt\"><a href=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("page_delet", array("id" => $this->getAttribute((isset($context["elv"]) ? $context["elv"] : $this->getContext($context, "elv")), "id"))), "html", null, true);
            echo "\" onclick=\"return confirm('Etes vous sûr...?')\" ><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/servicesscolarite/images/delet.jpeg"), "html", null, true);
            echo "\" width=\"20\"  height=\"20\"/> </a></td>
                                    <td class=\"centrer_elt\"><a href=\"";
            // line 59
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
        // line 63
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
        return array (  170 => 63,  155 => 59,  149 => 58,  145 => 57,  141 => 56,  137 => 55,  133 => 54,  129 => 52,  125 => 51,  119 => 48,  114 => 46,  109 => 44,  105 => 43,  101 => 42,  97 => 41,  93 => 40,  69 => 19,  65 => 18,  59 => 14,  56 => 13,  49 => 8,  45 => 7,  40 => 6,  33 => 5,  30 => 4,);
    }
}
