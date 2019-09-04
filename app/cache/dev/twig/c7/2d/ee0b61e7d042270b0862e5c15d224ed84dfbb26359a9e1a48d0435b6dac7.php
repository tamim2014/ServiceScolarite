<?php

/* ServicesScolariteBundle:Default:listEleve.html.twig */
class __TwigTemplate_c72dee0b61e7d042270b0862e5c15d224ed84dfbb26359a9e1a48d0435b6dac7 extends Twig_Template
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
        // line 13
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
    ";
    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        // line 14
        echo "        <!-- menu accordeon  -->
             <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
            <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>    
    ";
    }

    // line 21
    public function block_body($context, array $blocks = array())
    {
        // line 22
        echo "    <!-- <?php require_once (\"entete.php\"); ?>  comment faire cet include avec twig -->
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
        // line 69
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["eleves"]) ? $context["eleves"] : $this->getContext($context, "eleves")));
        foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
            // line 70
            echo "                                        <tr>
                                            <td>";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["e"]) ? $context["e"] : $this->getContext($context, "e")), "cODE"), "html", null, true);
            echo "</td>
                                            <td>";
            // line 72
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["e"]) ? $context["e"] : $this->getContext($context, "e")), "nomEleve"), "html", null, true);
            echo "</td>
                                            <td>";
            // line 73
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["e"]) ? $context["e"] : $this->getContext($context, "e")), "emailEleve"), "html", null, true);
            echo "</td>
                                            <td> ";
            // line 74
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["e"]) ? $context["e"] : $this->getContext($context, "e")), "photoEleve"), "html", null, true);
            echo " </td>
                                            <!-- <td><img src=\"";
            // line 75
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["e"]) ? $context["e"] : $this->getContext($context, "e")), "photoEleve"), "html", null, true);
            echo "\"  > </td> -->
                                            <!-- <td><a href=\"";
            // line 76
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
        // line 80
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
        return array (  175 => 80,  163 => 76,  159 => 75,  155 => 74,  151 => 73,  147 => 72,  143 => 71,  140 => 70,  136 => 69,  113 => 49,  109 => 48,  81 => 22,  78 => 21,  71 => 14,  68 => 13,  62 => 11,  58 => 10,  54 => 9,  45 => 4,  42 => 3,  37 => 13,  34 => 3,  31 => 2,);
    }
}
