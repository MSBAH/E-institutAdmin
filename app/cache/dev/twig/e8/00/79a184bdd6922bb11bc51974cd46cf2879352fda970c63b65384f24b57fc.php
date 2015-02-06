<?php

/* EinstitutAdminBundle:Default:Inscription_candidat.html.twig */
class __TwigTemplate_e80079a184bdd6922bb11bc51974cd46cf2879352fda970c63b65384f24b57fc extends Twig_Template
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
        // line 19
        $context["Nom"] = "";
        // line 20
        echo "                ";
        $context["Prenom"] = "";
        // line 21
        echo "                ";
        $context["Email"] = "";
        // line 22
        echo "                ";
        $context["Tel"] = "";
        // line 23
        echo "                ";
        $context["Adresse"] = "";
        // line 24
        echo "                ";
        $context["Sexe"] = "";
        // line 25
        echo "                ";
        $context["Ville"] = "";
        // line 26
        echo "                ";
        $context["Pays"] = "";
        // line 27
        echo "                ";
        $context["Formation"] = "";
        // line 28
        echo "                ";
        $context["Fichier"] = "";
        // line 29
        echo "                ";
        $context["Niveau"] = "";
        // line 30
        echo "                
                 
                    
                    ";
        // line 33
        if ( !(null === (isset($context["candidat"]) ? $context["candidat"] : $this->getContext($context, "candidat")))) {
            // line 34
            echo "                
                        ";
            // line 35
            $context["Nom"] = $this->getAttribute($this->getAttribute((isset($context["candidat"]) ? $context["candidat"] : $this->getContext($context, "candidat")), "utilisateur", array()), "nom", array());
            // line 36
            echo "\t\t\t";
            $context["Prenom"] = $this->getAttribute($this->getAttribute((isset($context["candidat"]) ? $context["candidat"] : $this->getContext($context, "candidat")), "utilisateur", array()), "prenom", array());
            // line 37
            echo "                        ";
            $context["Email"] = $this->getAttribute($this->getAttribute((isset($context["candidat"]) ? $context["candidat"] : $this->getContext($context, "candidat")), "utilisateur", array()), "email", array());
            // line 38
            echo "                        ";
            $context["Tel"] = $this->getAttribute($this->getAttribute((isset($context["candidat"]) ? $context["candidat"] : $this->getContext($context, "candidat")), "utilisateur", array()), "tel", array());
            // line 39
            echo "                        ";
            $context["Adresse"] = $this->getAttribute($this->getAttribute((isset($context["candidat"]) ? $context["candidat"] : $this->getContext($context, "candidat")), "utilisateur", array()), "adresse", array());
            // line 40
            echo "                        ";
            $context["Sexe"] = $this->getAttribute($this->getAttribute((isset($context["Candidat"]) ? $context["Candidat"] : $this->getContext($context, "Candidat")), "utilisateur", array()), "sexe", array());
            // line 41
            echo "                        ";
            $context["Ville"] = $this->getAttribute($this->getAttribute((isset($context["Candidat"]) ? $context["Candidat"] : $this->getContext($context, "Candidat")), "utilisateur", array()), "ville", array());
            // line 42
            echo "                        ";
            $context["Pays"] = $this->getAttribute($this->getAttribute((isset($context["Candidat"]) ? $context["Candidat"] : $this->getContext($context, "Candidat")), "utilisateur", array()), "pays", array());
            // line 43
            echo "                        ";
            $context["Niveau"] = $this->getAttribute((isset($context["Candidat"]) ? $context["Candidat"] : $this->getContext($context, "Candidat")), "niveau", array());
            // line 44
            echo "                       
                
                    ";
        }
        // line 46
        echo " 
                
               ";
        // line 49
        echo "            
                
                
                
                
                
                
                
                
                
                <section class=\"panel\">
                    <header class=\"panel-heading\">
                        Inscription Candidat
                              <span class=\"tools pull-right\">
                            <a class=\"fa fa-chevron-down\" href=\"javascript:;\"></a>
                            <a class=\"fa fa-cog\" href=\"javascript:;\"></a>
                            <a class=\"fa fa-times\" href=\"javascript:;\"></a>
                         </span>
                    </header>
                    <div class=\"panel-body\">
                        <form class=\"form-horizontal  \" method=\"POST\" action='";
        // line 69
        echo $this->env->getExtension('routing')->getPath("einstitut_ajouter_candidat");
        echo "' >
                         

                    
                            <div class=\"form-group\">
                                <label class=\"control-label col-md-3\">Nom :</label>
                                <div class=\"col-md-4\">
                                    <input type=\"text\" class=\"form-control\" placeholder=\"Nom\" name=\"nom\" value=\"";
        // line 76
        echo twig_escape_filter($this->env, (isset($context["Nom"]) ? $context["Nom"] : $this->getContext($context, "Nom")), "html", null, true);
        echo "\" autofocus >
                                </div>
                            </div>
                            

                           <div class=\"form-group\">
                                <label class=\"control-label col-md-3\">Prénom :</label>
                                <div class=\"col-md-4\">
                                   <input type=\"text\" class=\"form-control\" placeholder=\"Prenom\" name=\"prenom\" value=\"";
        // line 84
        echo twig_escape_filter($this->env, (isset($context["Prenom"]) ? $context["Prenom"] : $this->getContext($context, "Prenom")), "html", null, true);
        echo "\" autofocus>
                                </div>
                            </div>
                      
                             <div class=\"form-group\">
                                <label class=\"control-label col-md-3\">E-Mail :</label>
                                <div class=\"col-md-4\">
                                   <input type=\"text\" class=\"form-control\" placeholder=\"E-mail\"name=\"email\" value=\"";
        // line 91
        echo twig_escape_filter($this->env, (isset($context["Email"]) ? $context["Email"] : $this->getContext($context, "Email")), "html", null, true);
        echo "\" autofocus>
                                </div>
                            </div> 
\t\t\t\t\t\t\t<div class=\"form-group\">
                                <label class=\"control-label col-md-3\">Tel :</label>
                                <div class=\"col-md-4\">
                                   <input type=\"text\" class=\"form-control\" placeholder=\"Tel\" name=\"tel\" value=\"";
        // line 97
        echo twig_escape_filter($this->env, (isset($context["Tel"]) ? $context["Tel"] : $this->getContext($context, "Tel")), "html", null, true);
        echo "\" autofocus>
                                </div>
                            </div>
\t\t\t\t\t\t\t<div class=\"form-group\">
                                <label class=\"control-label col-md-3\">Adresse :</label>
                                <div class=\"col-md-4\">
                                   <input type=\"text\" class=\"form-control\" placeholder=\"Adresse\" name=\"adresse\" value=\"";
        // line 103
        echo twig_escape_filter($this->env, (isset($context["Adresse"]) ? $context["Adresse"] : $this->getContext($context, "Adresse")), "html", null, true);
        echo "\" autofocus>
                                </div>
                            </div>
\t\t\t\t\t\t\t<div class=\"form-group\">
                                <label class=\"control-label col-md-3\">Sexe :</label>
                                <div class=\"col-md-4\">
                                   <input type=\"text\" class=\"form-control\" placeholder=\"Sexe\" name=\"sexe\" value=\"";
        // line 109
        echo twig_escape_filter($this->env, (isset($context["Sexe"]) ? $context["Sexe"] : $this->getContext($context, "Sexe")), "html", null, true);
        echo "\" autofocus>
                                </div>
                            </div>
\t\t\t\t\t\t\t<div class=\"form-group\">
                                <label class=\"control-label col-md-3\">Ville :</label>
                                <div class=\"col-md-4\">
                                   <input type=\"text\" class=\"form-control\" placeholder=\"Ville\" name=\"ville\" value=\"";
        // line 115
        echo twig_escape_filter($this->env, (isset($context["Ville"]) ? $context["Ville"] : $this->getContext($context, "Ville")), "html", null, true);
        echo "\" autofocus>
                                </div>
                            </div>
\t\t\t\t\t\t\t<div class=\"form-group\">
                                <label class=\"control-label col-md-3\">Pays :</label>
                                <div class=\"col-md-4\">
                                   <input type=\"text\" class=\"form-control\" placeholder=\"Pays\" name=\"pays\" value=\"";
        // line 121
        echo twig_escape_filter($this->env, (isset($context["Pays"]) ? $context["Pays"] : $this->getContext($context, "Pays")), "html", null, true);
        echo "\" autofocus>
                                </div>
                            </div>
\t\t\t\t\t\t\t<div class=\"form-group\">
                                <label class=\"control-label col-md-3\">Niveau :</label>
                                <div class=\"col-md-4\">
                                   <input type=\"text\" class=\"form-control\" placeholder=\"Niveau\" name=\"niveau\" value=\"";
        // line 127
        echo twig_escape_filter($this->env, (isset($context["Niveau"]) ? $context["Niveau"] : $this->getContext($context, "Niveau")), "html", null, true);
        echo "\" autofocus>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"control-label col-md-3\">Formations :</label>
                                <div class=\"col-md-4\">
                                   <select name=\"formations\" >
                                         
                                     ";
        // line 135
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["formations"]) ? $context["formations"] : $this->getContext($context, "formations")));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 136
            echo "                                    <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "intituleDiplome", array()), "html", null, true);
            echo "</option>
                                       ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 138
        echo "                                     
                                  </select>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"control-label col-md-3\">Etablissements :</label>
                                <div class=\"col-md-4\">
                                   <select name=\"etablissement\" >
                                         
                                     ";
        // line 147
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["etab"]) ? $context["etab"] : $this->getContext($context, "etab")));
        foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
            // line 148
            echo "                                    <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "nomEtabl", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "nomEtabl", array()), "html", null, true);
            echo "</option>
                                     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 150
        echo "                                     
                                  </select>
                                </div>
                            </div>
\t\t\t\t<div class=\"form-group\">
                                <label class=\"control-label col-md-3\">Fichiers:</label>
                                <div class=\"col-md-4\">
                                    <textarea name=\"nomfichier\"></textarea>
                                </div>
                            </div>
\t\t\t\t\t\t\t
                            <input type=\"submit\" name=\"btn_soumettre\" class=\"btn btn-info\" value=\"Valider\"/>
                            
                         
                        </form>
                        <center><span style=\"color:greenyellow\">";
        // line 165
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 166
            echo "        ";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 167
        echo "</span></center>
                    </div>
                </section>
       
                
                
                
            ";
        // line 215
        echo "                
                
                
                
                
                
                
                
                
                
                

         
            </div>
        </div>

";
    }

    // line 233
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 234
        echo "
";
    }

    // line 237
    public function block_javascripts($context, array $blocks = array())
    {
        // line 238
        echo "
";
    }

    public function getTemplateName()
    {
        return "EinstitutAdminBundle:Default:Inscription_candidat.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  371 => 238,  368 => 237,  363 => 234,  360 => 233,  340 => 215,  331 => 167,  322 => 166,  318 => 165,  301 => 150,  290 => 148,  286 => 147,  275 => 138,  264 => 136,  260 => 135,  249 => 127,  240 => 121,  231 => 115,  222 => 109,  213 => 103,  204 => 97,  195 => 91,  185 => 84,  174 => 76,  164 => 69,  142 => 49,  138 => 46,  133 => 44,  130 => 43,  127 => 42,  124 => 41,  121 => 40,  118 => 39,  115 => 38,  112 => 37,  109 => 36,  107 => 35,  104 => 34,  102 => 33,  97 => 30,  94 => 29,  91 => 28,  88 => 27,  85 => 26,  82 => 25,  79 => 24,  76 => 23,  73 => 22,  70 => 21,  67 => 20,  65 => 19,  52 => 8,  49 => 7,  42 => 4,  39 => 3,  11 => 1,);
    }
}
