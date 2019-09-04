<?php

/* ServicesScolariteBundle:Default:modifEleve.html.twig */
class __TwigTemplate_f7e88cf9e6fe1e3ef3e1e0ae8bcb95ab1413663a6f0ab37fe5fa11eb9534717d extends Twig_Template
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
        echo "    <div class=\"decalerEnBas\">
        <!-- LE MENU HORIZONTAL -->
        <!-- <?php require_once (\"entete.php\"); ?>  comment faire cet include avec twig -->
        <div class=\" navbar navbar-inverse navbar-fixed-top\">
            <ul class=\" nav navbar-nav\">
                <li><a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("afficherListEleves");
        echo "\">Etudiant</a></li>
                <li><a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("saisirEleves");
        echo "\">Saisie</a></li>
                <li><a href=\"LogOut.php\">LogOut</a></li>
            </ul>
        </div>

    <!-- LE FORMULAIRE DE MISE A JOUR -->
        <div class=\"container decalerEnBas col-md-6 col-x-12 col-md-offset-3 \">
            <div class=\"panel panel-default  \" >
                <div class=\"panel-heading  \">Saisie des Elèves</div>
                <div class=\"panel-body\">
                        ";
        // line 30
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), 'form_start');
        echo "
                            <!-- poser ici une coditie if (cODE== \$_GET['code']) -->

                                            <div  class=\"form-group\">
                                                ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "nomEleve"), 'label', array("label" => "Code: "));
        echo "
                                                ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "cODE"), 'widget');
        echo "
                                            </div>

                                           <div  class=\"form-group\">
                                               ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "nomEleve"), 'label', array("label" => "Nom: "));
        echo "
                                               ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "nomEleve"), 'widget');
        echo "

                                           </div>

                                           <div  class=\"form-group\">
                                               ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "nomEleve"), 'label', array("label" => "Email: "));
        echo "
                                               ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "emailEleve"), 'widget');
        echo "

                                           </div>

                                           <div  class=\"form-group\">
                                               ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "nomEleve"), 'label', array("label" => "Photo: "));
        echo "
                                               ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "photoEleve"), 'widget');
        echo "
                                           </div>

                            <!-- fin du if -->
                       ";
        // line 56
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), 'form_end');
        echo "
                </div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "ServicesScolariteBundle:Default:modifEleve.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 56,  129 => 52,  125 => 51,  117 => 46,  113 => 45,  105 => 40,  101 => 39,  94 => 35,  90 => 34,  83 => 30,  70 => 20,  66 => 19,  59 => 14,  56 => 13,  49 => 8,  45 => 7,  40 => 6,  33 => 5,  30 => 4,);
    }
}
