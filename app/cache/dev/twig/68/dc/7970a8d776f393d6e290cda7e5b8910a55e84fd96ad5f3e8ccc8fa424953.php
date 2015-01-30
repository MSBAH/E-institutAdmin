<?php

/* EinstitutAdminBundle:Default:Salle.html.twig */
class __TwigTemplate_68dc7970a8d776f393d6e290cda7e5b8910a55e84fd96ad5f3e8ccc8fa424953 extends Twig_Template
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
                        Liste des Salles
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
                                    <th>Num Salle</th>
                                    <th>Date de début</th>
\t\t\t\t\t\t\t\t    <th>Date de fin</th>
                                    <th>Enseignant</th>
                                    <th>Etat</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                                </thead>
                                <tbody>
";
        // line 63
        echo "                                </tbody>
                            </table>
                        </div>
                    </div>
                </section>
            </div>
        </div>
";
    }

    // line 72
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 73
        echo "
";
    }

    // line 76
    public function block_javascripts($context, array $blocks = array())
    {
        // line 77
        echo "
";
    }

    public function getTemplateName()
    {
        return "EinstitutAdminBundle:Default:Salle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 77,  117 => 76,  112 => 73,  109 => 72,  98 => 63,  52 => 8,  49 => 7,  42 => 4,  39 => 3,  11 => 1,);
    }
}
