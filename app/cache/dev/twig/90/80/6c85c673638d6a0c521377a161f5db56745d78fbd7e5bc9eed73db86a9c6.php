<?php

/* ServicesScolariteBundle:Default:saisieEtudiant.html.twig */
class __TwigTemplate_90806c85c673638d6a0c521377a161f5db56745d78fbd7e5bc9eed73db86a9c6 extends Twig_Template
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
        echo "    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 22
        echo "    ";
        $this->displayBlock('javascripts', $context, $blocks);
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "        <link rel=\"icon\" sizes=\"16x16\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <!-- fav-icon -->
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">

        <!-- icon \"fa fa-search\" -->
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
        <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/servicesscolarite/css/search_bar.css"), "html", null, true);
        echo "\" />

        <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/servicesscolarite/css/essai2.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/servicesscolarite/css/bootstrap.min.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/servicesscolarite/css/hoverable_sidenav_buttons.css"), "html", null, true);
        echo "\" />
        <!-- icons bar -->
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
         <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/servicesscolarite/css/icons_bar.css"), "html", null, true);
        echo "\" />
    ";
    }

    // line 22
    public function block_javascripts($context, array $blocks = array())
    {
        // line 23
        echo "        <!-- Moteur générique(jQuery) -->
             <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
        <!-- menu accordeon  -->           
            <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
        <!-- icons bar -->    
            <script  src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/servicesscolarite/js/icons_bar.js"), "html", null, true);
        echo "\" /></script>   
    ";
    }

    // line 32
    public function block_body($context, array $blocks = array())
    {
        // line 33
        echo "
    <!-- <?php require_once (\"entete.php\"); ?>  comment faire cet include avec twig -->

    <!-- bar de navigation noir -->
    <div class=\" navbar navbar-inverse navbar-fixed-top\">
        <!-- CONTENAIR DU BOUTON HUMBERGER -->
        <div class=\"dropdown search-container\"  style=\"float:left; margin-left: 16px;\">
            <!-- BOUTON HAMBERGER -->
            <button id=\"menu1\" data-toggle=\"dropdown\" style=\"background-color:#040317;\" >
              <span  data-toggle=\"dropdown\" class=\"glyphicon glyphicon-menu-hamburger\" style=\"color:white; \">
              </span>
            </button>
            <!-- DROP DOWN DU BOUTON HAMBERGER -->
            <ul class=\"dropdown-menu  \" role=\"menu\" aria-labelledby=\"menu1\"
             style=\"  background-color: #040317; overflow-x: hidden;   font-size: 20px; margin-left:-20px;\"
            > 
            
              <li role=\"presentation\" ><a role=\"menuitem\" tabindex=\"-1\" href=\"#\"  ><i class=\"fa fa-fw fa-home\" style=\"font-size:20px; \" ></i> Home</a></li>
              <li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-1\" href=\"#\" ><i class=\"fa fa-fw fa-wrench\" style=\"font-size:20px; \" ></i> Services</a></li>
              <li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-1\" href=\"#\"><i class=\"fa fa-fw fa-user\" style=\"font-size:20px; \" ></i> Clients</a></li>
              <li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-1\" href=\"#\"><i class=\"fa fa-fw fa-envelope\" style=\"font-size:20px; \" ></i> Contact</a></li>

              <li role=\"presentation\" class=\"divider\"></li>

              <li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-1\" href=\"#\">About Us</a></li>
            </ul><!-- DROP DOWN DU BOUTON HAMBERGER -->         
        </div><!-- CONTENAIR DU BOUTON HUMBERGER -->
        <!-- MENU DE NAVIGATION HORIZONTAL -->
        <ul class=\" nav navbar-nav\"> 
            <li><a href=\"";
        // line 62
        echo $this->env->getExtension('routing')->getPath("saisirEleves");
        echo "\"><span class=\"glyphicon glyphicon-edit\"></span> Saisie</a></li>          
            <li><a href=\"";
        // line 63
        echo $this->env->getExtension('routing')->getPath("afficherListEleves");
        echo "\"> <span class=\"glyphicon glyphicon-list-alt\"></span> Etudiant</a></li>           
            <li><a href=\"#\"><span class=\"glyphicon glyphicon-user\"></span> Sign Up</a></li>
            <li><a href=\"LogOut.php\"><span class=\"glyphicon glyphicon-log-in\"></span> Login</a></li>
        </ul><!-- MENU DE NAVIGATION HORIZONTAL -->

        <!-- MOTEUR DE RECHERCHE -->

        <div class=\"search-container\">


            <form  method=\"post\">
              <input type=\"text\" placeholder=\"Rechercher\" name=\"motcle\" >
              <button type=\"submit\"><i class=\"fa fa-search\"></i></button>
              
            </form>
        </div><!-- MOTEUR DE RECHERCHE -->
    </div><!-- navbar  noir-->

    <!-- icons bar & social media buttons -->

    <div class=\"icon-bar\" >
      <a class=\"active\" href=\"#\"><i class=\"fa fa-home  icon_bar_home\" style=\"font-size:30px; \" ></i></a>
      <a href=\"#\"><i class=\"fa fa-envelope\" style=\"font-size:30px; margin-top:-10px;\"></i></a> 
      <a href=\"#\"  class=\"fa fa-yahoo\"></a> 
      <a href=\"#\"  class=\"fa fa-linkedin\"></a>     
      <a href=\"#\"  class=\"fa fa-google\"></a>
      <a href=\"#\"  class=\"fa fa-android\"></a>
      <a href=\"#\"  class=\"fa fa-facebook\" ></a>
      <a href=\"#\"  class=\"fa fa-youtube\" ></a> 
      <a href=\"#\"  class=\"fa fa-twitter\" ></a> 
      <a href=\"#\"  class=\"fa fa-rss\"></a>
    </div>

    <!-- Hoverable sidenav buttons --> 

    <div id=\"mySidenav\" class=\"sidenav\" >
      <a href=\"#\" id=\"angular\">Angular</a>
      <a href=\"#\" id=\"bootstrap\">Bootstrap</a>
      <a href=\"#\" id=\"symfony\">Symfony</a>
      <a href=\"#\" id=\"webservice\">SOAP</a>
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
        // line 121
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), 'form_start');
        echo "
                            <td> ";
        // line 122
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "cODE"), 'widget');
        echo " </td>
                            <td> ";
        // line 123
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "nomEleve"), 'widget');
        echo " </td>
                            <td>";
        // line 124
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "emailEleve"), 'widget');
        echo "</td>
                            <td>";
        // line 125
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "photoEleve"), 'widget');
        echo "</td>
                            <td> ";
        // line 126
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "Enregistrer"), 'widget', array("label" => "+"));
        echo " </td>
                            <td> ... </td>
                            ";
        // line 128
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), 'form_end');
        echo "
                        </tr>

                        ";
        // line 131
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listedeseleves"]) ? $context["listedeseleves"] : $this->getContext($context, "listedeseleves")));
        foreach ($context['_seq'] as $context["_key"] => $context["elv"]) {
            // line 132
            echo "
                                <tr>
                                    <td>";
            // line 134
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["elv"]) ? $context["elv"] : $this->getContext($context, "elv")), "cODE"), "html", null, true);
            echo "</td>
                                    <td>";
            // line 135
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["elv"]) ? $context["elv"] : $this->getContext($context, "elv")), "nomEleve"), "html", null, true);
            echo "</td>
                                    <td>";
            // line 136
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["elv"]) ? $context["elv"] : $this->getContext($context, "elv")), "emailEleve"), "html", null, true);
            echo "</td>
                                    <td><img src=\"";
            // line 137
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("bundles/servicesscolarite/images/" . $this->getAttribute((isset($context["elv"]) ? $context["elv"] : $this->getContext($context, "elv")), "photoEleve"))), "html", null, true);
            echo "\" width=\"40\" height=\"30\"/></td>
                                    <td>
                                        <a href=\"";
            // line 139
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
            // line 144
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
        // line 152
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
        return array (  278 => 152,  264 => 144,  253 => 139,  248 => 137,  244 => 136,  240 => 135,  236 => 134,  232 => 132,  228 => 131,  222 => 128,  217 => 126,  213 => 125,  209 => 124,  205 => 123,  201 => 122,  197 => 121,  136 => 63,  132 => 62,  101 => 33,  98 => 32,  92 => 28,  85 => 23,  82 => 22,  76 => 20,  70 => 17,  66 => 16,  62 => 15,  57 => 13,  47 => 7,  44 => 6,  39 => 22,  37 => 6,  34 => 5,  31 => 4,);
    }
}
