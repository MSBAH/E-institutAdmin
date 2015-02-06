<?php

/* EinstitutAdminBundle:Default:Inscription_etud.html.twig */
class __TwigTemplate_e109df456e70ac311368706b5455d8c4cc980b3c552560771924e802220dd917 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("EinstitutAdminBundle::Base-layout.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EinstitutAdminBundle::Base-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "    Bienvenue ! | ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "
 <div class=\"row\">
            <div class=\"col-md-12\">
                <section class=\"panel\">
            
               
                </section>
                
                
                
               ";
        // line 18
        $context["User"] = "";
        // line 19
        echo "               ";
        $context["Nom"] = "";
        // line 20
        echo "                ";
        $context["Prenom"] = "";
        // line 21
        echo "                ";
        $context["Email"] = "";
        // line 22
        echo "                ";
        $context["Numetud"] = "";
        // line 23
        echo "                ";
        $context["Intitule"] = "";
        // line 24
        echo "                ";
        $context["Type"] = "";
        // line 25
        echo "                ";
        $context["Date"] = "";
        // line 26
        echo "                 
                    
                    ";
        // line 28
        if ( !(null === (isset($context["inscr"]) ? $context["inscr"] : $this->getContext($context, "inscr")))) {
            // line 29
            echo "                    
                        ";
            // line 30
            $context["User"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["inscr"]) ? $context["inscr"] : $this->getContext($context, "inscr")), "etudiant", array()), "utilisateur", array()), "username", array());
            // line 31
            echo "                        ";
            $context["Nom"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["inscr"]) ? $context["inscr"] : $this->getContext($context, "inscr")), "etudiant", array()), "utilisateur", array()), "nom", array());
            // line 32
            echo "\t\t\t";
            $context["Prenom"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["inscr"]) ? $context["inscr"] : $this->getContext($context, "inscr")), "etudiant", array()), "utilisateur", array()), "prenom", array());
            // line 33
            echo "                       
                        ";
            // line 34
            $context["Email"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["inscr"]) ? $context["inscr"] : $this->getContext($context, "inscr")), "etudiant", array()), "utilisateur", array()), "email", array());
            // line 35
            echo "                        ";
            $context["Numetud"] = $this->getAttribute($this->getAttribute((isset($context["inscr"]) ? $context["inscr"] : $this->getContext($context, "inscr")), "etudiant", array()), "numetudiant", array());
            // line 36
            echo "                        ";
            $context["Intitule"] = $this->getAttribute($this->getAttribute((isset($context["inscr"]) ? $context["inscr"] : $this->getContext($context, "inscr")), "diplome", array()), "intituleDiplome", array());
            // line 37
            echo "                        ";
            $context["Type"] = $this->getAttribute($this->getAttribute((isset($context["inscr"]) ? $context["inscr"] : $this->getContext($context, "inscr")), "diplome", array()), "typeDiplome", array());
            // line 38
            echo "                        ";
            $context["Date"] = $this->getAttribute((isset($context["inscr"]) ? $context["inscr"] : $this->getContext($context, "inscr")), "dateInscription", array());
            // line 39
            echo "\t\t\t
                         
                    ";
        }
        // line 41
        echo " 
            
                
                
                
                
                
                
                
                
                
                <section class=\"panel\">
                    <header class=\"panel-heading\">
                        Inscription Etudiant
                              <span class=\"tools pull-right\">
                            <a class=\"fa fa-chevron-down\" href=\"javascript:;\"></a>
                            <a class=\"fa fa-cog\" href=\"javascript:;\"></a>
                            <a class=\"fa fa-times\" href=\"javascript:;\"></a>
                         </span>
                    </header>
                    <div class=\"panel-body\">
                        <form class=\"form-horizontal  \" method=\"POST\" action='";
        // line 62
        echo $this->env->getExtension('routing')->getPath("einstitut_ajouter_etud");
        echo "' >
                         
          

                     
                            
                            
         
                    
                            <div class=\"form-group\">
                                <label class=\"control-label col-md-3\">Nom :</label>
                                <div class=\"col-md-4\">
                                    <input type=\"text\" class=\"form-control\" placeholder=\"Nom\" name=\"nom\" value=\"";
        // line 74
        echo twig_escape_filter($this->env, (isset($context["Nom"]) ? $context["Nom"] : $this->getContext($context, "Nom")), "html", null, true);
        echo "\" autofocus >
                                </div>
                            </div>
                            

                           <div class=\"form-group\">
                                <label class=\"control-label col-md-3\">Prénom :</label>
                                <div class=\"col-md-4\">
                                   <input type=\"text\" class=\"form-control\" placeholder=\"Prenom\" name=\"prenom\" value=\"";
        // line 82
        echo twig_escape_filter($this->env, (isset($context["Prenom"]) ? $context["Prenom"] : $this->getContext($context, "Prenom")), "html", null, true);
        echo "\" autofocus>
                                </div>
                            </div>
                      
                             <div class=\"form-group\">
                                <label class=\"control-label col-md-3\">E-Mail :</label>
                                <div class=\"col-md-4\">
                                   <input type=\"text\" class=\"form-control\" placeholder=\"E-mail\"name=\"email\" value=\"";
        // line 89
        echo twig_escape_filter($this->env, (isset($context["Email"]) ? $context["Email"] : $this->getContext($context, "Email")), "html", null, true);
        echo "\" autofocus>
                                </div>
                            </div> 
\t\t\t\t\t\t\t<div class=\"form-group\">
                                <label class=\"control-label col-md-3\">Numéro Etudiant :</label>
                                <div class=\"col-md-4\">
                                   <input type=\"text\" class=\"form-control\" placeholder=\"Numéro Etudiant\" name=\"numEtudiant\" value=\"";
        // line 95
        echo twig_escape_filter($this->env, (isset($context["Numetud"]) ? $context["Numetud"] : $this->getContext($context, "Numetud")), "html", null, true);
        echo "\" autofocus>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"control-label col-md-3\">Intitulé Diplome :</label>
                                <div class=\"col-md-4\">
                                   <input type=\"text\" class=\"form-control\" placeholder=\"Intitulé Diplome\" name=\"intituleDiplome\" value=\"";
        // line 101
        echo twig_escape_filter($this->env, (isset($context["Intitule"]) ? $context["Intitule"] : $this->getContext($context, "Intitule")), "html", null, true);
        echo "\"  autofocus>
                                </div>
                            </div>
\t\t\t\t\t\t\t <div class=\"form-group\">
                                <label class=\"control-label col-md-3\">Type Diplome :</label>
                                <div class=\"col-md-4\">
                                   <input type=\"text\" class=\"form-control\" placeholder=\"Type Diplome\" name=\"typeDiplome\" value=\"";
        // line 107
        echo twig_escape_filter($this->env, (isset($context["Type"]) ? $context["Type"] : $this->getContext($context, "Type")), "html", null, true);
        echo "\"  autofocus>
                                </div>
                            </div>
\t\t\t\t\t\t\t<div class=\"form-group\">
                                <label class=\"control-label col-md-3\">Année D'étude :</label>
                                <div class=\"col-md-4\">
                                   <input type=\"text\" class=\"form-control\" placeholder=\"Année D'étude\" name=\"dateInscription\" value=\"";
        // line 113
        echo twig_escape_filter($this->env, (isset($context["Date"]) ? $context["Date"] : $this->getContext($context, "Date")), "html", null, true);
        echo "\"  autofocus>
                                </div>
                            </div>
\t\t\t\t\t\t\t
                            <input type=\"submit\" name=\"btn_soumettre\" class=\"btn btn-info\" value=\"Valider\"/>
                            
                         
                        </form>
                        <center><span style=\"color:greenyellow\">";
        // line 121
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 122
            echo "        ";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 123
        echo "</span></center>
                    </div>
                </section>
       
             

         
            </div>
        </div>

";
    }

    // line 135
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 136
        echo "
";
    }

    // line 139
    public function block_javascripts($context, array $blocks = array())
    {
        // line 140
        echo "
";
    }

    public function getTemplateName()
    {
        return "EinstitutAdminBundle:Default:Inscription_etud.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  270 => 140,  267 => 139,  262 => 136,  259 => 135,  245 => 123,  236 => 122,  232 => 121,  221 => 113,  212 => 107,  203 => 101,  194 => 95,  185 => 89,  175 => 82,  164 => 74,  149 => 62,  126 => 41,  121 => 39,  118 => 38,  115 => 37,  112 => 36,  109 => 35,  107 => 34,  104 => 33,  101 => 32,  98 => 31,  96 => 30,  93 => 29,  91 => 28,  87 => 26,  84 => 25,  81 => 24,  78 => 23,  75 => 22,  72 => 21,  69 => 20,  66 => 19,  64 => 18,  52 => 8,  49 => 7,  42 => 4,  39 => 3,  11 => 1,);
    }
}
