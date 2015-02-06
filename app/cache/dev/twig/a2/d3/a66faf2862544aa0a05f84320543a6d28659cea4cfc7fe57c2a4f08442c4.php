<?php

/* EinstitutAdminBundle:Default:Etudiant.html.twig */
class __TwigTemplate_a2d3a66faf2862544aa0a05f84320543a6d28659cea4cfc7fe57c2a4f08442c4 extends Twig_Template
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
                        <div class=\"col-sm-12\">
                            <section class=\"panel\">
                                <header class=\"panel-heading\">
                                    Liste des Etudiants 
                                    <span class=\"tools pull-right\">
                                        <a href=\"javascript:;\" class=\"fa fa-chevron-down\"></a>
                                        <a href=\"javascript:;\" class=\"fa fa-cog\"></a>
                                        <a href=\"javascript:;\" class=\"fa fa-times\"></a>
                                    </span>
                                </header>
                                <div class=\"panel-body\">
                                    <div class=\"adv-table editable-table \">
                                        <div class=\"clearfix\">
                                            <div class=\"btn-group\">
                                                <button id=\"editable-sample_new\" class=\"btn btn-primary\">
                                                    Add New <i class=\"fa fa-plus\"></i>
                                                </button>
                                            </div>
                                            <div class=\"btn-group pull-right\">
                                                <button class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\">Tools <i class=\"fa fa-angle-down\"></i>
                                                </button>
                                                <ul class=\"dropdown-menu pull-right\">
                                                    <li><a href=\"#\">Print</a></li>
                                                    <li><a href=\"#\">Save as PDF</a></li>
                                                    <li><a href=\"#\">Export to Excel</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class=\"space15\"></div>
                                        <table class=\"table table-striped table-hover table-bordered\" id=\"editable-sample\">
                                            <thead>
                                                <tr>
                                                    <th>Numero d'etudiant</th>
                                                    <th>Nom</th>
                                                    <th>Prenom</th>
                                                    <th>E-Mail</th>
                                                    <th>Adresse</th>
                                                    <th>Tel</th>
                                                    <th>Ville</th>
                                                    <th>Diplome</th>
                                                    <th>nombre d'absence</th>
                                                    <th>Edit</th>
                                                    <th>Delete</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                ";
        // line 56
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["etuds"]) ? $context["etuds"] : $this->getContext($context, "etuds")));
        foreach ($context['_seq'] as $context["_key"] => $context["etud"]) {
            // line 57
            echo "                                                <tr class=\"\">
                                                    <td>";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["etud"], "etudiant", array()), "numEtudiant", array()), "html", null, true);
            echo "</td>
                                                    <td>";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["etud"], "etudiant", array()), "utilisateur", array()), "nom", array()), "html", null, true);
            echo "</td>
                                                    <td>";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["etud"], "etudiant", array()), "utilisateur", array()), "prenom", array()), "html", null, true);
            echo "</td>
                                                    <td>";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["etud"], "etudiant", array()), "utilisateur", array()), "email", array()), "html", null, true);
            echo "</td>
                                                    <td>";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["etud"], "etudiant", array()), "utilisateur", array()), "adresse", array()), "html", null, true);
            echo "</td>
                                                    <td>";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["etud"], "etudiant", array()), "utilisateur", array()), "tel", array()), "html", null, true);
            echo "</td>
                                                    <td>";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["etud"], "etudiant", array()), "utilisateur", array()), "ville", array()), "html", null, true);
            echo "</td>
                                                    <td>";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["etud"], "diplome", array()), "intituleDiplome", array()), "html", null, true);
            echo "</td>
                                                    <td>";
            // line 66
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($this->getAttribute($context["etud"], "etudiant", array()), "absences", array())), "html", null, true);
            echo "</td>
                                                    
                                                    <td><a class=\"edit\" href=\"javascript:;\">Edit</a></td>
                                                    <td><a class=\"delete\" href=\"javascript:;\">Delete</a></td>
                                                </tr>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['etud'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>

";
    }

    // line 82
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 83
        echo "
";
    }

    // line 86
    public function block_javascripts($context, array $blocks = array())
    {
        // line 87
        echo "
";
    }

    public function getTemplateName()
    {
        return "EinstitutAdminBundle:Default:Etudiant.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 87,  173 => 86,  168 => 83,  165 => 82,  153 => 72,  141 => 66,  137 => 65,  133 => 64,  129 => 63,  125 => 62,  121 => 61,  117 => 60,  113 => 59,  109 => 58,  106 => 57,  102 => 56,  52 => 8,  49 => 7,  42 => 4,  39 => 3,  11 => 1,);
    }
}
