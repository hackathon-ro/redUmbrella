<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
<header class="header">
    <!--nav bar helper-->
    <div class="navbar-helper">
        <div class="row-fluid">
            <!--panel site-name-->
            <div class="span2">
                <div class="panel-sitename">
                    <h2><a href="#"><span class="color-teal">Smart</span>time</a></h2>
                </div>
            </div>
            <!--/panel name-->

            <div class="span6"></div>
            <div class="span4"></div>

        </div><!--/row-fluid-->
    </div><!--/nav bar helper-->
</header>
<section class="section">
            <div class="row-fluid">
                <!-- span side-left -->
                <div class="span1">
                    <!--side bar-->
                    <aside class="side-left" style="top: 60px;">
                        <ul class="sidebar">
                            <li class="active first"> <!--always define class .first for first-child of li element sidebar left-->
                                <a title="dashboard" href="index.html">
                                    <div class="helper-font-24">
                                        <i class="icon-dashboard icon-2x"></i>
                                    </div>
                                    <span class="sidebar-text">Dashboard</span>
                                </a>
                            </li>
                            <li> <!--always define class .first for first-child of li element sidebar left-->
                                <a title="dashboard" href="index.html">
                                    <div class="helper-font-24">
                                        <i class="icon-cogs icon-2x"></i>
                                    </div>
                                    <span class="sidebar-text">Settings</span>
                                </a>
                            </li>
                            <li> <!--always define class .first for first-child of li element sidebar left-->
                                <a title="dashboard" href="index.html">
                                    <div class="helper-font-24">
                                        <i class="icon-desktop icon-2x"></i>
                                    </div>
                                    <span class="sidebar-text">Simulator</span>
                                </a>
                            </li>
                        </ul>
                    </aside><!--/side bar -->
                </div><!-- span side-left -->
                
                <!-- span content -->
                <div class="span9">
                    <!-- content -->
                    <div class="content">
                        <!-- content-header -->
                        <div class="content-header">
                            <h2></h2>
                        </div><!-- /content-header -->
                        
                        <!-- content-body -->
                        <div class="content-body">
                            <div class="divider-content"><span></span></div>
                            <?php echo $content?>
                        </div><!--/content-body -->
                    </div><!-- /content -->
                </div><!-- /span content -->
                
                <!-- span side-right -->
                <div class="span2">
                    <!-- side-right -->
                    <aside class="side-right" style="top: 60px;">
                        <!-- sidebar-right -->
                        <div class="sidebar-right">
                            <!--sidebar-right-header-->
                            <div class="sidebar-right-header">
                                <p class="bold">Balance</p>
                            </div><!--/sidebar-right-header-->
                            
                            <div class="sidebar-right-content">
                                <div class="tab-content">
                                    <!--contact-->
                                    <div id="contact" class="tab-pane fade active in">
                                        <div class="side-contact">
                                            <div class="divider-content"><span></span></div>
                                            Content area here
                                        </div>
                                    </div><!--/contact-->
                                </div>
                            </div>
                        </div><!-- /sidebar-right -->
                    </aside><!-- /side-right -->
                </div><!-- /span side-right -->
                
            </div><!--/row-->
        </section>
<?php $this->endContent(); ?>