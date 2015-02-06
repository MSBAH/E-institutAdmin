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
        echo "        





       

        <!-- page end-->
        </section>
    </section>
    <!--main content end-->
<!--right sidebar start-->
";
        // line 80
        $this->env->loadTemplate("EinstitutAdminBundle::includes/right-sidebar.html.twig")->display($context);
        // line 81
        echo "<!--right sidebar end-->

</section>

<!-- Placed js at the end of the document so the pages load faster -->

<!--Core js-->
<script src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/EinstitutAdmin/js/jquery.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/EinstitutAdmin/js/jquery-1.8.3.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/EinstitutAdmin/bs3/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/EinstitutAdmin/js/jquery-ui-1.9.2.custom.min.js"), "html", null, true);
        echo "\"></script>
<script class=\"include\" type=\"text/javascript\" src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/EinstitutAdmin/js/jquery.dcjqaccordion.2.7.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/EinstitutAdmin/js/jquery.scrollTo.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/EinstitutAdmin/js/easypiechart/jquery.easypiechart.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/EinstitutAdmin/js/jQuery-slimScroll-1.3.0/jquery.slimscroll.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/EinstitutAdmin/js/jquery.nicescroll.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/EinstitutAdmin/js/jquery.nicescroll.js"), "html", null, true);
        echo "\"></script>

<script src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/EinstitutAdmin/js/bootstrap-switch.js"), "html", null, true);
        echo "\"></script>

<script type=\"text/javascript\" src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/EinstitutAdmin/js/fuelux/js/spinner.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/EinstitutAdmin/js/bootstrap-fileupload/bootstrap-fileupload.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/EinstitutAdmin/js/bootstrap-wysihtml5/wysihtml5-0.3.0.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/EinstitutAdmin/js/bootstrap-wysihtml5/bootstrap-wysihtml5.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/EinstitutAdmin/js/bootstrap-datepicker/js/bootstrap-datepicker.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/EinstitutAdmin/js/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/EinstitutAdmin/js/bootstrap-daterangepicker/moment.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/EinstitutAdmin/js/bootstrap-daterangepicker/daterangepicker.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/EinstitutAdmin/js/bootstrap-colorpicker/js/bootstrap-colorpicker.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/EinstitutAdmin/js/bootstrap-timepicker/js/bootstrap-timepicker.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/EinstitutAdmin/js/jquery-multi-select/js/jquery.multi-select.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/EinstitutAdmin/js/jquery-multi-select/js/jquery.quicksearch.js"), "html", null, true);
        echo "\"></script>

<script type=\"text/javascript\" src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/EinstitutAdmin/js/bootstrap-inputmask/bootstrap-inputmask.min.js"), "html", null, true);
        echo "\"></script>

<script src=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/EinstitutAdmin/js/jquery-tags-input/jquery.tagsinput.js"), "html", null, true);
        echo "\"></script>

<script src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/EinstitutAdmin/js/select2/select2.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/EinstitutAdmin/js/select-init.js"), "html", null, true);
        echo "\"></script>


<!--common script init for all pages-->
<script src=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/EinstitutAdmin/js/scripts.js"), "html", null, true);
        echo "\"></script>

<script src=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/EinstitutAdmin/js/toggle-init.js"), "html", null, true);
        echo "\"></script>

<script src=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/EinstitutAdmin/js/advanced-form.js"), "html", null, true);
        echo "\"></script>
<!--Easy Pie Chart-->
<script src=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/EinstitutAdmin/js/easypiechart/jquery.easypiechart.js"), "html", null, true);
        echo "\"></script>
<!--Sparkline Chart-->
<script src=\"";
        // line 131
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/EinstitutAdmin/js/sparkline/jquery.sparkline.js"), "html", null, true);
        echo "\"></script>
<!--jQuery Flot Chart-->
<script src=\"";
        // line 133
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/EinstitutAdmin/js/flot-chart/jquery.flot.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/EinstitutAdmin/js/flot-chart/jquery.flot.tooltip.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 135
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/EinstitutAdmin/js/flot-chart/jquery.flot.resize.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 136
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/EinstitutAdmin/js/flot-chart/jquery.flot.pie.resize.js"), "html", null, true);
        echo "\"></script>

";
        // line 138
        $this->displayBlock('javascripts', $context, $blocks);
        // line 141
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

    // line 138
    public function block_javascripts($context, array $blocks = array())
    {
        // line 139
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
        return array (  370 => 139,  367 => 138,  362 => 65,  359 => 64,  354 => 48,  351 => 47,  346 => 12,  343 => 11,  335 => 141,  333 => 138,  328 => 136,  324 => 135,  320 => 134,  316 => 133,  311 => 131,  306 => 129,  301 => 127,  296 => 125,  291 => 123,  284 => 119,  280 => 118,  275 => 116,  270 => 114,  265 => 112,  261 => 111,  257 => 110,  253 => 109,  249 => 108,  245 => 107,  241 => 106,  237 => 105,  233 => 104,  229 => 103,  225 => 102,  221 => 101,  216 => 99,  211 => 97,  207 => 96,  203 => 95,  199 => 94,  195 => 93,  191 => 92,  187 => 91,  183 => 90,  179 => 89,  175 => 88,  166 => 81,  164 => 80,  149 => 67,  147 => 64,  140 => 59,  138 => 58,  135 => 57,  133 => 56,  125 => 50,  123 => 47,  108 => 35,  104 => 34,  98 => 31,  93 => 29,  89 => 28,  85 => 27,  81 => 26,  77 => 25,  73 => 24,  69 => 23,  65 => 22,  61 => 21,  57 => 20,  52 => 18,  48 => 17,  44 => 16,  40 => 14,  38 => 11,  33 => 9,  23 => 1,);
    }
}
