<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_15e78fb011f0307073ed2420a620a1e31696f4d50c931c3a94102d3745728ced extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
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

    <!-- Custom styles for this template -->
    <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/EinstitutAdmin/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 22
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
</head>

    <body class=\"login-body\">
        <div class=\"containe\">
     
            ";
        // line 38
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 39
            echo "                ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 40
                echo "                    <div class=\"flash-";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\">
                        ";
                // line 41
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "

            ";
        // line 47
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 49
        echo "        </div>
        
        <!--Core js-->
    <script src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/EinstitutAdmin/js/jquery.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/EinstitutAdmin/bs3/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

  </body>
</html>

";
    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        // line 12
        echo "         E-institut Connexion 
    ";
    }

    // line 47
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 48
        echo "            ";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 48,  141 => 47,  136 => 12,  133 => 11,  123 => 53,  119 => 52,  114 => 49,  112 => 47,  108 => 45,  102 => 44,  93 => 41,  88 => 40,  83 => 39,  79 => 38,  60 => 22,  56 => 21,  50 => 18,  46 => 17,  42 => 16,  38 => 14,  36 => 11,  31 => 9,  21 => 1,);
    }
}
