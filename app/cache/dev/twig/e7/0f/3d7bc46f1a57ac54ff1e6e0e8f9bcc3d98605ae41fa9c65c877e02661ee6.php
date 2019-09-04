<?php

/* ServicesScolariteBundle:Default:listEleve.html.twig */
class __TwigTemplate_e70f3d7bc46f1a57ac54ff1e6e0e8f9bcc3d98605ae41fa9c65c877e02661ee6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
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
        // line 17
        echo "    ";
        $this->displayBlock('javascripts', $context, $blocks);
    }

    // line 3
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
        <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/servicesscolarite/css/hoverable_sidenav_buttons.css"), "html", null, true);
        echo "\" />
                <!-- icons bar -->
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
         <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/servicesscolarite/css/icons_bar.css"), "html", null, true);
        echo "\" />
    ";
    }

    // line 17
    public function block_javascripts($context, array $blocks = array())
    {
        // line 18
        echo "        <!-- Moteur générique(jQuery) -->
             <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
        <!-- menu accordeon  -->           
            <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
        <!-- icons bar -->    
            <script  src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/servicesscolarite/js/icons_bar.js"), "html", null, true);
        echo "\" /></script>              
    ";
    }

    // line 28
    public function block_body($context, array $blocks = array())
    {
        // line 29
        echo "    <!-- <?php require_once (\"entete.php\"); ?>  comment faire cet include avec twig -->
    <!-- bar de navigation noir -->
    <div class=\" navbar navbar-inverse navbar-fixed-top\">
        <!-- CONTENAIR DU BOUTON HUMBERGER -->
        <div class=\"dropdown search-container\"  style=\"float:left; margin-left: 16px;\">
            <!-- BOUTON HAMBERGER -->
            <button id=\"menu1\" data-toggle=\"dropdown\" style=\"background-color:#040317;\" >
              <span data-toggle=\"dropdown\" class=\"glyphicon glyphicon-menu-hamburger\" style=\"color:white; \">
              </span>
            </button>
            <!-- DROP DOWN DU BOUTON HAMBERGER -->
            <ul class=\"dropdown-menu\" role=\"menu\" aria-labelledby=\"menu1\"
             style=\"  background-color: #040317;  overflow-x: hidden;   font-size: 20px;
             margin-left:-20px;\"
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
        // line 57
        echo $this->env->getExtension('routing')->getPath("saisirEleves");
        echo "\"><span class=\"glyphicon glyphicon-edit\"></span> Saisie</a></li>          
            <li><a href=\"";
        // line 58
        echo $this->env->getExtension('routing')->getPath("afficherListEleves");
        echo "\"> <span class=\"glyphicon glyphicon-list-alt\"></span> Etudiants</a></li>           
            <li><a href=\"#\"><span class=\"glyphicon glyphicon-user\"></span> Sign Up</a></li>
            <li><a href=\"LogOut.php\"><span class=\"glyphicon glyphicon-log-in\"></span> Login</a></li>
        </ul><!-- MENU DE NAVIGATION HORIZONTAL -->
        
       <!-- MOTEUR DE RECHERCHE -->

        <div class=\"search-container\">
            <form action=\"#\" method=\"post\">
              <input type=\"text\" placeholder=\"Rechercher\" name=\"search\">
              <button type=\"submit\"> <i class=\"fa fa-search\"></i> </button>
            </form>
        </div><!-- MOTEUR DE RECHERCHE -->        
    </div><!-- navbar noir -->


    <!-- icons bar & social media buttons -->


    <div class=\"icon-bar\" style=\"position:absolute; top:80px;\" >
      <a class=\"active\" href=\"#\"><i class=\"fa fa-home icon_bar_home\" style=\"font-size:30px; \"></i></a>
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

    <div id=\"mySidenav\" class=\"sidenav\" style=\"z-index:1; margin-top:60px;\">
      <a href=\"#\" id=\"angular\">Angular</a>
      <a href=\"#\" id=\"bootstrap\">Bootstrap</a>
      <a href=\"#\" id=\"symfony\">Symfony</a>
      <a href=\"#\" id=\"webservice\">SOAP</a>
    </div>

    <div class=\"col-md-11  col-xs-11  decalerEnBas  centrer_la_table\">

        <div class=\"panel  panel-info EspaceHaut\">
            Etablissement:Public/Privé
            <div class=\"panel-heading\">Liste de élèves</div>
                <div class=\"panel-body\">
                                <table  id=\"test2\" class=\"table  table-striped\">
                                    <tr>
                                        <th>CODE</th><th>NOM</th><th>EMAIL</th><th>PHOTO</th>
                                    </tr>
                                    ";
        // line 109
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["eleves"]) ? $context["eleves"] : $this->getContext($context, "eleves")));
        foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
            // line 110
            echo "                                        <tr>
                                            <td>";
            // line 111
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["e"]) ? $context["e"] : $this->getContext($context, "e")), "cODE"), "html", null, true);
            echo "</td>
                                            <td>";
            // line 112
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["e"]) ? $context["e"] : $this->getContext($context, "e")), "nomEleve"), "html", null, true);
            echo "</td>
                                            <td>";
            // line 113
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["e"]) ? $context["e"] : $this->getContext($context, "e")), "emailEleve"), "html", null, true);
            echo "</td>
                                            <td> ";
            // line 114
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["e"]) ? $context["e"] : $this->getContext($context, "e")), "photoEleve"), "html", null, true);
            echo " </td>
                                            <!-- <td><img src=\"";
            // line 115
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["e"]) ? $context["e"] : $this->getContext($context, "e")), "photoEleve"), "html", null, true);
            echo "\"  > </td> -->
                                            <!-- <td><a href=\"";
            // line 116
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
        // line 120
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
        return array (  224 => 120,  212 => 116,  208 => 115,  204 => 114,  200 => 113,  196 => 112,  192 => 111,  189 => 110,  185 => 109,  131 => 58,  127 => 57,  97 => 29,  94 => 28,  88 => 23,  81 => 18,  78 => 17,  72 => 15,  66 => 12,  62 => 11,  58 => 10,  54 => 9,  45 => 4,  42 => 3,  37 => 17,  34 => 3,  31 => 2,);
    }
}
