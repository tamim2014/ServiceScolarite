<?php

/* ServicesScolariteBundle:Default:saisieEtudiant.html.twig */
class __TwigTemplate_32121a7e241654d9601a49f2c3d309819d79b09685fd1ff34556f36ea6e43d4f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("base.html.twig");

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
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
        // line 17
        echo "    ";
        $this->displayBlock('javascripts', $context, $blocks);
    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 6
        echo "        <link rel=\"icon\" sizes=\"16x16\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <!-- fav-icon -->
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">

        <!-- icon \"fa fa-search\" -->
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
        <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/servicesscolarite/css/search_bar.css"), "html", null, true);
        echo "\" />

        <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/servicesscolarite/css/essai2.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/servicesscolarite/css/bootstrap.min.css"), "html", null, true);
        echo "\" />
    ";
    }

    // line 17
    public function block_javascripts($context, array $blocks = array())
    {
        // line 18
        echo "        <!-- menu accordeon  -->
             <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
            <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>    
    ";
    }

    // line 24
    public function block_body($context, array $blocks = array())
    {
        // line 25
        echo "
    <!-- <?php require_once (\"entete.php\"); ?>  comment faire cet include avec twig -->
    <div class=\" navbar navbar-inverse navbar-fixed-top\">
        <div class=\"dropdown search-container\"  style=\"float:left; margin-left: 16px;\">
            <button id=\"menu1\" data-toggle=\"dropdown\" style=\"background-color:black;\" >
              <span id=\"menu1\" data-toggle=\"dropdown\" class=\"glyphicon glyphicon-menu-hamburger\" style=\"color:white; \">
              </span>
            </button>
            <ul class=\"dropdown-menu\" role=\"menu\" aria-labelledby=\"menu1\"
             style=\"  background-color: #111; overflow-x: hidden;   font-size: 20px;
             margin-left:-20px;\"
            >
              <li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-1\" href=\"#\"><i class=\"fa fa-fw fa-home\"></i> Home</a></li>
              <li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-1\" href=\"#\"><i class=\"fa fa-fw fa-wrench\"></i> Services</a></li>
              <li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-1\" href=\"#\"><i class=\"fa fa-fw fa-user\"></i> Clients</a></li>
              <li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-1\" href=\"#\"><i class=\"fa fa-fw fa-envelope\"></i> Contact</a></li>

              <li role=\"presentation\" class=\"divider\"></li>

              <li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-1\" href=\"#\">About Us</a></li>
            </ul>         
        </div>
        <ul class=\" nav navbar-nav\">           
            <li><a href=\"";
        // line 48
        echo $this->env->getExtension('routing')->getPath("afficherListEleves");
        echo "\">Etudiant</a></li>
            <li><a href=\"";
        // line 49
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

    <div class=\"container  decalerEnBas  \">
        <div class=\"panel  panel-info  \" >
        Etablissement:Public/Privé
        <div class=\"panel-heading \">Liste de élèves</div>
        <div class=\"panel-body\">
                    <div class=\"col-md-12  col-xs-12  \">
                    <table class=\"table table-striped table-bordered table-hover \">
                        <tr>
                            <th>CODE</th>
                            <th>NOM</th>
                            <th>EMAIL</th>
                            <th>PHOTO</th>
                            <th>...</th>
                            <th>...</th>
                        </tr>
                        <tr style=\"background-color: #999999\">
                            ";
        // line 77
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), 'form_start');
        echo "
                            <td> ";
        // line 78
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "cODE"), 'widget');
        echo " </td>
                            <td> ";
        // line 79
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "nomEleve"), 'widget');
        echo " </td>
                            <td>";
        // line 80
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "emailEleve"), 'widget');
        echo "</td>
                            <td>";
        // line 81
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "photoEleve"), 'widget');
        echo "</td>
                            <td> ";
        // line 82
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "Enregistrer"), 'widget', array("label" => "+"));
        echo " </td>
                            <td> ... </td>
                            ";
        // line 84
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), 'form_end');
        echo "
                        </tr>

                        ";
        // line 87
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listedeseleves"]) ? $context["listedeseleves"] : $this->getContext($context, "listedeseleves")));
        foreach ($context['_seq'] as $context["_key"] => $context["elv"]) {
            // line 88
            echo "
                                <tr>
                                    <td>";
            // line 90
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["elv"]) ? $context["elv"] : $this->getContext($context, "elv")), "cODE"), "html", null, true);
            echo "</td>
                                    <td>";
            // line 91
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["elv"]) ? $context["elv"] : $this->getContext($context, "elv")), "nomEleve"), "html", null, true);
            echo "</td>
                                    <td>";
            // line 92
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["elv"]) ? $context["elv"] : $this->getContext($context, "elv")), "emailEleve"), "html", null, true);
            echo "</td>
                                    <td><img src=\"";
            // line 93
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("bundles/servicesscolarite/images/" . $this->getAttribute((isset($context["elv"]) ? $context["elv"] : $this->getContext($context, "elv")), "photoEleve"))), "html", null, true);
            echo "\" width=\"40\" height=\"30\"/></td>
                                    <td>
                                        <a href=\"";
            // line 95
            echo $this->env->getExtension('routing')->getPath("page_modif");
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["elv"]) ? $context["elv"] : $this->getContext($context, "elv")), "id"), "html", null, true);
            echo "/";
            echo "edit";
            echo "\">
                                           <span class=\"glyphicon glyphicon-edit\"></span>
                                        </a>                                    
                                    </td>
                                    <td>
                                         <a href=\"";
            // line 100
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("page_delet", array("id" => $this->getAttribute((isset($context["elv"]) ? $context["elv"] : $this->getContext($context, "elv")), "id"))), "html", null, true);
            echo "\" onclick=\"return confirm('Etes vous sûr...?')\" >
                                            <span class=\"glyphicon glyphicon-trash\"></span> 
                                         </a>
                                    </td>
                                   
                                </tr>

                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['elv'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 108
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
        return array (  224 => 108,  210 => 100,  199 => 95,  194 => 93,  190 => 92,  186 => 91,  182 => 90,  178 => 88,  174 => 87,  168 => 84,  163 => 82,  159 => 81,  155 => 80,  151 => 79,  147 => 78,  143 => 77,  112 => 49,  108 => 48,  83 => 25,  80 => 24,  73 => 18,  70 => 17,  64 => 15,  60 => 14,  55 => 12,  45 => 6,  42 => 5,  37 => 17,  34 => 5,  31 => 4,);
    }
}
