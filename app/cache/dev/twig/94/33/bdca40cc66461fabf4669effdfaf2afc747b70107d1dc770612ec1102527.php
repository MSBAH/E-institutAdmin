<?php

/* EinstitutAdminBundle::includes/Header.html.twig */
class __TwigTemplate_9433bdca40cc66461fabf4669effdfaf2afc747b70107d1dc770612ec1102527 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<header class=\"header fixed-top clearfix\">
<!--logo start-->
<div class=\"brand\">

    <a href=\"index.html\" class=\"logo\">
        <img src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/EinstitutAdmin/images/logo/logo_s2.png"), "html", null, true);
        echo "\" alt=\"\">
    </a>
    <div class=\"sidebar-toggle-box\">
        <div class=\"fa fa-bars\"></div>
    </div>
</div>
<!--logo end-->

<div class=\"nav notify-row\" id=\"top_menu\">
    <!--  notification start -->
    <ul class=\"nav top-menu\">
        <!-- settings start -->
        <li class=\"dropdown\">
            <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\">
                <i class=\"fa fa-tasks\"></i>
                <span class=\"badge bg-success\">8</span>
            </a>
            <ul class=\"dropdown-menu extended tasks-bar\">
                <li>
                    <p class=\"\">You have 8 pending tasks</p>
                </li>
                <li>
                    <a href=\"#\">
                        <div class=\"task-info clearfix\">
                            <div class=\"desc pull-left\">
                                <h5>Target Sell</h5>
                                <p>25% , Deadline  12 June’13</p>
                            </div>
                                    <span class=\"notification-pie-chart pull-right\" data-percent=\"45\">
                            <span class=\"percent\"></span>
                            </span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href=\"#\">
                        <div class=\"task-info clearfix\">
                            <div class=\"desc pull-left\">
                                <h5>Product Delivery</h5>
                                <p>45% , Deadline  12 June’13</p>
                            </div>
                                    <span class=\"notification-pie-chart pull-right\" data-percent=\"78\">
                            <span class=\"percent\"></span>
                            </span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href=\"#\">
                        <div class=\"task-info clearfix\">
                            <div class=\"desc pull-left\">
                                <h5>Payment collection</h5>
                                <p>87% , Deadline  12 June’13</p>
                            </div>
                                    <span class=\"notification-pie-chart pull-right\" data-percent=\"60\">
                            <span class=\"percent\"></span>
                            </span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href=\"#\">
                        <div class=\"task-info clearfix\">
                            <div class=\"desc pull-left\">
                                <h5>Target Sell</h5>
                                <p>33% , Deadline  12 June’13</p>
                            </div>
                                    <span class=\"notification-pie-chart pull-right\" data-percent=\"90\">
                            <span class=\"percent\"></span>
                            </span>
                        </div>
                    </a>
                </li>

                <li class=\"external\">
                    <a href=\"#\">See All Tasks</a>
                </li>
            </ul>
        </li>
        <!-- settings end -->
        <!-- inbox dropdown start-->
        <li id=\"header_inbox_bar\" class=\"dropdown\">
            <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\">
                <i class=\"fa fa-envelope-o\"></i>
                <span class=\"badge bg-important\">4</span>
            </a>
            <ul class=\"dropdown-menu extended inbox\">
                <li>
                    <p class=\"red\">You have 4 Mails</p>
                </li>
                <li>
                    <a href=\"#\">
                        <span class=\"photo\"><img alt=\"avatar\" src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/EinstitutAdmin/images/avatar-mini.jpg"), "html", null, true);
        echo "\"></span>
                                <span class=\"subject\">
                                <span class=\"from\">Jonathan Smith</span>
                                <span class=\"time\">Just now</span>
                                </span>
                                <span class=\"message\">
                                    Hello, this is an example msg.
                                </span>
                    </a>
                </li>
                <li>
                    <a href=\"#\">
                        <span class=\"photo\"><img alt=\"avatar\" src=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/EinstitutAdmin/images/avatar-mini-2.jpg"), "html", null, true);
        echo "\"></span>
                                <span class=\"subject\">
                                <span class=\"from\">Jane Doe</span>
                                <span class=\"time\">2 min ago</span>
                                </span>
                                <span class=\"message\">
                                    Nice admin template
                                </span>
                    </a>
                </li>
                <li>
                    <a href=\"#\">
                        <span class=\"photo\"><img alt=\"avatar\" src=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/EinstitutAdmin/images/avatar-mini-3.jpg"), "html", null, true);
        echo "\"></span>
                                <span class=\"subject\">
                                <span class=\"from\">Tasi sam</span>
                                <span class=\"time\">2 days ago</span>
                                </span>
                                <span class=\"message\">
                                    This is an example msg.
                                </span>
                    </a>
                </li>
                <li>
                    <a href=\"#\">
                        <span class=\"photo\"><img alt=\"avatar\" src=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/EinstitutAdmin/images/avatar-mini.jpg"), "html", null, true);
        echo "\"></span>
                                <span class=\"subject\">
                                <span class=\"from\">Mr. Perfect</span>
                                <span class=\"time\">2 hour ago</span>
                                </span>
                                <span class=\"message\">
                                    Hi there, its a test
                                </span>
                    </a>
                </li>
                <li>
                    <a href=\"#\">See all messages</a>
                </li>
            </ul>
        </li>
        <!-- inbox dropdown end -->
        <!-- notification dropdown start-->
        <li id=\"header_notification_bar\" class=\"dropdown\">
            <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\">

                <i class=\"fa fa-bell-o\"></i>
                <span class=\"badge bg-warning\">3</span>
            </a>
            <ul class=\"dropdown-menu extended notification\">
                <li>
                    <p>Notifications</p>
                </li>
                <li>
                    <div class=\"alert alert-info clearfix\">
                        <span class=\"alert-icon\"><i class=\"fa fa-bolt\"></i></span>
                        <div class=\"noti-info\">
                            <a href=\"#\"> Server #1 overloaded.</a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class=\"alert alert-danger clearfix\">
                        <span class=\"alert-icon\"><i class=\"fa fa-bolt\"></i></span>
                        <div class=\"noti-info\">
                            <a href=\"#\"> Server #2 overloaded.</a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class=\"alert alert-success clearfix\">
                        <span class=\"alert-icon\"><i class=\"fa fa-bolt\"></i></span>
                        <div class=\"noti-info\">
                            <a href=\"#\"> Server #3 overloaded.</a>
                        </div>
                    </div>
                </li>

            </ul>
        </li>
        <!-- notification dropdown end -->
    </ul>
    <!--  notification end -->
</div>
    <!-- nom de l'université -->
<div class=\"unive\">
    <h2>Université de BAMAKO
    <img class=\"logo-unive\" src=\"";
        // line 195
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/EinstitutAdmin/images/logo/logo-ub.png"), "html", null, true);
        echo "\" width=\"200\" height=\"70\" /></h2>
</div>
<div class=\"top-nav clearfix\">
    <!--search & user info start-->
    <ul class=\"nav pull-right top-menu\">
        <li>
            <input type=\"text\" class=\"form-control search\" placeholder=\" Search\">
        </li>
        <!-- user login dropdown start-->
        <li class=\"dropdown\">
            <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\">
                <img alt=\"\" src=\"";
        // line 206
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/EinstitutAdmin/images/avatar1_small.jpg"), "html", null, true);
        echo "\">
                <span class=\"username\">Secrétaire</span>
                <b class=\"caret\"></b>
            </a>
            <ul class=\"dropdown-menu extended logout\">
                <li><a href=\"#\"><i class=\" fa fa-suitcase\"></i>Profile</a></li>
                <li><a href=\"#\"><i class=\"fa fa-cog\"></i> Settings</a></li>
                <li><a href=\"login.html\"><i class=\"fa fa-key\"></i> Log Out</a></li>
            </ul>
        </li>
        <!-- user login dropdown end -->
        <li>
            <div class=\"toggle-right-box\">
                <div class=\"fa fa-bars\"></div>
            </div>
        </li>
    </ul>
    <!--search & user info end-->
</div>
</header>
";
    }

    public function getTemplateName()
    {
        return "EinstitutAdminBundle::includes/Header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  244 => 206,  230 => 195,  166 => 134,  151 => 122,  136 => 110,  121 => 98,  26 => 6,  19 => 1,);
    }
}
