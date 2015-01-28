<?php

/* EinstitutAdminBundle::Base-layout.html.twig */
class __TwigTemplate_3f0d0d9fc434e5250da9edfc2015e4784db46f68e83aa138bbd7776fe0c2bd11 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"utf-8\">

    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <link rel=\"shortcut icon\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/EinstitutAdmin/favicon.ico"), "html", null, true);
        echo "\">
    <title>
    ";
        // line 11
        $this->displayBlock('title', $context, $blocks);
        // line 14
        echo "    </title>
    <!--Core CSS -->
    <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/EinstitutAdmin/bs3/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/EinstitutAdmin/css/bootstrap-reset.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/EinstitutAdmin/font-awesome/css/font-awesome.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />

    <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/EinstitutAdmin/css/bootstrap-switch.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/EinstitutAdmin/js/bootstrap-fileupload/bootstrap-fileupload.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/EinstitutAdmin/js/bootstrap-wysihtml5/bootstrap-wysihtml5.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/EinstitutAdmin/js/bootstrap-datepicker/css/datepicker.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/EinstitutAdmin/js/bootstrap-timepicker/compiled/timepicker.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/EinstitutAdmin/js/bootstrap-colorpicker/css/colorpicker.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/EinstitutAdmin/js/bootstrap-daterangepicker/daterangepicker-bs3.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/EinstitutAdmin/js/bootstrap-datetimepicker/css/datetimepicker.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/EinstitutAdmin/js/jquery-multi-select/css/multi-select.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/EinstitutAdmin/js/jquery-tags-input/jquery.tagsinput.css"), "html", null, true);
        echo "\" />

    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/EinstitutAdmin/js/select2/select2.css"), "html", null, true);
        echo "\" />

    <!-- Custom styles for this template -->
    <link href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/EinstitutAdmin/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/EinstitutAdmin/css/style-responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]>
    <script src=\"js/ie8-responsive-file-warning.js\"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
    <script src=\"https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js\"></script>
    <![endif]-->
    
    ";
        // line 47
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 50
        echo "</head>

<body>

<section id=\"container\" >
<!--header start-->
";
        // line 56
        $this->env->loadTemplate("EinstitutAdminBundle::includes/Header.html.twig")->display($context);
        // line 57
        echo "<!--header end-->
";
        // line 58
        $this->env->loadTemplate("EinstitutAdminBundle::includes/left-sidebar.html.twig")->display($context);
        // line 59
        echo "<!--sidebar end-->
    <!--main content start-->
    <section id=\"main-content\">
        <section class=\"wrapper\">
        <!-- page start-->
        ";
        // line 64
        $this->displayBlock('content', $context, $blocks);
        // line 67
        echo "        <div class=\"row\">
            <div class=\"col-md-12\">
                <section class=\"panel\">
                
                </section>

              

            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-md-12\">
                <section class=\"panel\">
            
               
                </section>
                <section class=\"panel\">
                    <header class=\"panel-heading\">
                        Réservation de Matériel informatique
                              <span class=\"tools pull-right\">
                            <a class=\"fa fa-chevron-down\" href=\"javascript:;\"></a>
                            <a class=\"fa fa-cog\" href=\"javascript:;\"></a>
                            <a class=\"fa fa-times\" href=\"javascript:;\"></a>
                         </span>
                    </header>
                    <div class=\"panel-body\">
                        <form class=\"form-horizontal  \" action=\"#\">
                         

                    
                            <div class=\"form-group\">
                                <label class=\"control-label col-md-3\">Date debut :</label>
                                <div class=\"col-md-4\">
                                    <div data-date=\"2012-12-21T15:25:00Z\" class=\"input-group date form_datetime-adv\">
                                        <input type=\"text\" class=\"form-control\" readonly size=\"16\">
                                        <div class=\"input-group-btn\">
                                            <button type=\"button\" class=\"btn btn-primary date-reset\"><i class=\"fa fa-times\"></i></button>
                                            <button type=\"button\" class=\"btn btn-warning date-set\"><i class=\"fa fa-calendar\"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"form-group\">
                                <label class=\"control-label col-md-3\">Date fin :</label>
                                <div class=\"col-md-4\">
                                    <div data-date=\"2012-12-21T15:25:00Z\" class=\"input-group date form_datetime-adv\">
                                        <input type=\"text\" class=\"form-control\" readonly size=\"16\">
                                        <div class=\"input-group-btn\">
                                            <button type=\"button\" class=\"btn btn-primary date-reset\"><i class=\"fa fa-times\"></i></button>
                                            <button type=\"button\" class=\"btn btn-warning date-set\"><i class=\"fa fa-calendar\"></i></button>
                                        </div>
                                    </div>
                                </div>
                              
                            </div>

                      
                            
                            
                            <div class=\"form-group\">
                                <label class=\"control-label col-md-3\">Matériel informatique :</label>
                                <div class=\"col-md-4\">
                                   
                                      <select class=\"form-control input-lg m-bot15\" >
                                <option>Option 1</option>
                                <option>Option 2</option>
                                <option>Option 3</option>
                            </select>
                                </div>
                              
                            </div>

                        </form>
                    </div>
                </section>
       
             

         
            </div>
        </div>





       

        <!-- page end-->
        </section>
    </section>
    <!--main content end-->
<!--right sidebar start-->
";
        // line 161
        $this->env->loadTemplate("EinstitutAdminBundle::includes/right-sidebar.html.twig")->display($context);
        // line 162
        echo "<!--right sidebar end-->

</section>

<!-- Placed js at the end of the document so the pages load faster -->

<!--Core js-->
<script src=\"";
        // line 169
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/EinstitutAdmin/js/jquery.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 170
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/EinstitutAdmin/js/jquery-1.8.3.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/EinstitutAdmin/bs3/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 172
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/EinstitutAdmin/js/jquery-ui-1.9.2.custom.min.js"), "html", null, true);
        echo "\"></script>
<script class=\"include\" type=\"text/javascript\" src=\"";
        // line 173
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/EinstitutAdmin/js/jquery.dcjqaccordion.2.7.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 174
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/EinstitutAdmin/js/jquery.scrollTo.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 175
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/EinstitutAdmin/js/easypiechart/jquery.easypiechart.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 176
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/EinstitutAdmin/js/jQuery-slimScroll-1.3.0/jquery.slimscroll.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 177
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/EinstitutAdmin/js/jquery.nicescroll.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 178
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/EinstitutAdmin/js/jquery.nicescroll.js"), "html", null, true);
        echo "\"></script>

<script src=\"";
        // line 180
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/EinstitutAdmin/js/bootstrap-switch.js"), "html", null, true);
        echo "\"></script>

<script type=\"text/javascript\" src=\"";
        // line 182
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/EinstitutAdmin/js/fuelux/js/spinner.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 183
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/EinstitutAdmin/js/bootstrap-fileupload/bootstrap-fileupload.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 184
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/EinstitutAdmin/js/bootstrap-wysihtml5/wysihtml5-0.3.0.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 185
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/EinstitutAdmin/js/bootstrap-wysihtml5/bootstrap-wysihtml5.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 186
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/EinstitutAdmin/js/bootstrap-datepicker/js/bootstrap-datepicker.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 187
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/EinstitutAdmin/js/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 188
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/EinstitutAdmin/js/bootstrap-daterangepicker/moment.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 189
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/EinstitutAdmin/js/bootstrap-daterangepicker/daterangepicker.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 190
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/EinstitutAdmin/js/bootstrap-colorpicker/js/bootstrap-colorpicker.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 191
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/EinstitutAdmin/js/bootstrap-timepicker/js/bootstrap-timepicker.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 192
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/EinstitutAdmin/js/jquery-multi-select/js/jquery.multi-select.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 193
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/EinstitutAdmin/js/jquery-multi-select/js/jquery.quicksearch.js"), "html", null, true);
        echo "\"></script>

<script type=\"text/javascript\" src=\"";
        // line 195
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/EinstitutAdmin/js/bootstrap-inputmask/bootstrap-inputmask.min.js"), "html", null, true);
        echo "\"></script>

<script src=\"";
        // line 197
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/EinstitutAdmin/js/jquery-tags-input/jquery.tagsinput.js"), "html", null, true);
        echo "\"></script>

<script src=\"";
        // line 199
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/EinstitutAdmin/js/select2/select2.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 200
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/EinstitutAdmin/js/select-init.js"), "html", null, true);
        echo "\"></script>


<!--common script init for all pages-->
<script src=\"";
        // line 204
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/EinstitutAdmin/js/scripts.js"), "html", null, true);
        echo "\"></script>

<script src=\"";
        // line 206
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/EinstitutAdmin/js/toggle-init.js"), "html", null, true);
        echo "\"></script>

<script src=\"";
        // line 208
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/EinstitutAdmin/js/advanced-form.js"), "html", null, true);
        echo "\"></script>
<!--Easy Pie Chart-->
<script src=\"";
        // line 210
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/EinstitutAdmin/js/easypiechart/jquery.easypiechart.js"), "html", null, true);
        echo "\"></script>
<!--Sparkline Chart-->
<script src=\"";
        // line 212
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/EinstitutAdmin/js/sparkline/jquery.sparkline.js"), "html", null, true);
        echo "\"></script>
<!--jQuery Flot Chart-->
<script src=\"";
        // line 214
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/EinstitutAdmin/js/flot-chart/jquery.flot.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 215
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/EinstitutAdmin/js/flot-chart/jquery.flot.tooltip.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 216
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/EinstitutAdmin/js/flot-chart/jquery.flot.resize.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 217
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/EinstitutAdmin/js/flot-chart/jquery.flot.pie.resize.js"), "html", null, true);
        echo "\"></script>

";
        // line 219
        $this->displayBlock('javascripts', $context, $blocks);
        // line 222
        echo "</body>
</html>


";
    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        // line 12
        echo "         E-institut Administartion 
    ";
    }

    // line 47
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 48
        echo "
    ";
    }

    // line 64
    public function block_content($context, array $blocks = array())
    {
        // line 65
        echo "
\t";
    }

    // line 219
    public function block_javascripts($context, array $blocks = array())
    {
        // line 220
        echo "
";
    }

    public function getTemplateName()
    {
        return "EinstitutAdminBundle::Base-layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  451 => 220,  448 => 219,  443 => 65,  440 => 64,  435 => 48,  432 => 47,  427 => 12,  424 => 11,  416 => 222,  414 => 219,  409 => 217,  405 => 216,  401 => 215,  397 => 214,  392 => 212,  387 => 210,  382 => 208,  377 => 206,  372 => 204,  365 => 200,  361 => 199,  356 => 197,  351 => 195,  346 => 193,  342 => 192,  338 => 191,  334 => 190,  330 => 189,  326 => 188,  322 => 187,  318 => 186,  314 => 185,  310 => 184,  306 => 183,  302 => 182,  297 => 180,  292 => 178,  288 => 177,  284 => 176,  280 => 175,  276 => 174,  272 => 173,  268 => 172,  264 => 171,  260 => 170,  256 => 169,  247 => 162,  245 => 161,  149 => 67,  147 => 64,  140 => 59,  138 => 58,  135 => 57,  133 => 56,  125 => 50,  123 => 47,  108 => 35,  104 => 34,  98 => 31,  93 => 29,  89 => 28,  85 => 27,  81 => 26,  77 => 25,  73 => 24,  69 => 23,  65 => 22,  61 => 21,  57 => 20,  52 => 18,  48 => 17,  44 => 16,  40 => 14,  38 => 11,  33 => 9,  23 => 1,);
    }
}
