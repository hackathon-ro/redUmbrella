<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
<header class="header">
    <div style="display:block">
        <div class="row-fluid">
            <div class="span2">
                <h2>Hackathron</h2>
            </div>
        </div>
    </div>
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
                                        <i class="icofont-dashboard"></i>
                                    </div>
                                    <span class="sidebar-text">Dashboard</span>
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
                            
                        </div><!-- /content-header -->
                        
                        <!-- content-breadcrumb -->
                        <div class="content-breadcrumb">
                            
                        </div><!-- /content-breadcrumb -->
                        
                        <!-- content-body -->
                        <div class="content-body">
                            
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
                                <div class="sr-header-right">
                                    <h2><span class="label label-info">$26,875</span></h2>
                                </div>
                                <div class="sr-header-left">
                                    <p class="bold">Balance</p>
                                    <small class="muted">Dec 30 2012</small>
                                </div>
                            </div><!--/sidebar-right-header-->
                            <!--sidebar-right-control-->
                            <div class="sidebar-right-control">
                                <ul class="sr-control-item">
                                    <li class="active"><a title="contacts" data-toggle="tab" href="#contact"><i class="icofont-group"></i></a></li>
                                    <li><a title="alternative 1" data-toggle="tab" href="#alt1"><i class="icofont-flag"></i></a></li>
                                    <li title="" rel="tooltip-bottom" data-original-title="view site"><a target="_BLANK" href="index.html"><i class="icofont-external-link"></i></a></li>
                                </ul>
                            </div><!-- /sidebar-right-control-->
                            <!-- sidebar-right-content -->
                            <div class="sidebar-right-content">
                                <div class="tab-content">
                                    
                                    <!--chat-->
                                    <div id="chat" class="tab-pane fade">
                                        <div class="side-chat">
                                            <!--header part-->
                                            <div class="chat-header">
                                                <div class="chat-action">
                                                    <div class="btn-group pull-right">
                                                        <!--we use data toggle tab for navigate this action-->
                                                        <a title="minimize" data-toggle="tab" href="#contact" class="bg-transparent no-border"><i class="icofont-minus"></i></a>
                                                        <a title="pop out" class="bg-transparent no-border"><i class="icofont-resize-full"></i></a>
                                                        <a title="close" data-toggle="tab" href="#contact" class="bg-transparent no-border"><i class="icofont-remove-sign"></i></a>
                                                    </div>
                                                </div>
                                                <h5><i class="icofont-certificate color-green"></i> Jane smith</h5>
                                            </div>
                                            <!--content part-->
                                            <div class="chat-content">
                                                <div class="chat-in">
                                                    <span class="chat-time">10:45am</span>
                                                    <strong class="chat-user">Jane smith: </strong>
                                                    <div class="chat-text">Lorem ipsum dolor</div>
                                                </div>
                                                <div class="chat-out">
                                                    <span class="chat-time">10:47am</span>
                                                    <strong class="chat-user">me: </strong>
                                                    <div class="chat-text">Erat duis lectus vel wisi, quibusdam aliquam vehicula eleifend ut</div>
                                                </div>
                                                <div class="chat-in">
                                                    <span class="chat-time">10:50am</span>
                                                    <strong class="chat-user">Jane smith: </strong>
                                                    <div class="chat-text">Et sagittis ut vel dolor nullam proin</div>
                                                </div>
                                                <div class="chat-out">
                                                    <span class="chat-time">10:52am</span>
                                                    <strong class="chat-user">me: </strong>
                                                    <div class="chat-text">massa massa quisque sodales id dictumst.</div>
                                                </div>
                                            </div>
                                            <!--status typed part-->
                                            <div class="chat-typed"><i class="typicn-chat"></i> Jane smith is typing...</div>
                                            <!--input part-->
                                            <div class="chat-input">
                                                <div class="chat-desc muted">Lorem ipsum dolor sit amet.</div>
                                                <textarea placeholder="chat here..." class="input-block-level"></textarea>
                                            </div>
                                        </div>
                                        <div class="divider-content"><span></span></div>
                                    </div><!--chat-->
                                    
                                    <!--contact-->
                                    <div id="contact" class="tab-pane fade active in">
                                        <div class="side-contact">
                                            <!--contact-control-->
                                            <div class="contact-control">
                                                <div class="btn-group pull-right">
                                                    <button data-toggle="dropdown" class="dropdown-toggle bg-transparent no-border">
                                                        <i class="icofont-caret-down"></i>
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="#"><i class="icofont-certificate color-green"></i> Online</a></li>
                                                        <li><a href="#"><i class="icofont-certificate color-silver-dark"></i> Ofline</a></li>
                                                        <li><a href="#"><i class="icofont-certificate color-red"></i> Busy</a></li>
                                                        <li><a href="#"><i class="icofont-certificate color-orange"></i> Idle</a></li>
                                                    </ul>
                                                </div>
                                                <h5><i class="icofont-comment color-green"></i> John Doe</h5>
                                            </div><!--/contact-control-->
                                            <!--contact-search-->
                                            <div class="contact-search">
                                                <div class="input-icon-prepend">
                                                    <div class="icon">
                                                        <button type="submit">
                                                            <i class="typicn-message color-silver-dark"></i>
                                                        </button>
                                                    </div>
                                                    <input type="text" placeholder="chat with..." name="contact-search" maxlength="11" class="input-block-level grd-white">
                                                </div>
                                            </div><!--/contact-search-->
                                            <!--contact-list, we set this max-height:380px, you can set this if you want-->
                                            <ul class="contact-list">
                                                <li class="contact-alt grd-white">
                                                    <!--we use data toggle tab for navigate this action-->
                                                    <a data-id="iin@mail.com" data-toggle="tab" href="#chat">
                                                        <!--we use contact-item structure like the component media in bootstrap-->
                                                        <div class="contact-item">
                                                            <div class="pull-left">
                                                                <img src="img/user-thumb-mini.jpg" style="width: 32px;height: 32px;" class="contact-item-object">
                                                            </div>
                                                            <div class="contact-item-body">
                                                                <div title="busy" class="status"><i class="icofont-certificate color-red"></i></div>
                                                                <p class="contact-item-heading bold">Iin T.</p>
                                                                <p class="help-block"><small class="muted">Team Leader</small></p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="contact-alt grd-white">
                                                    <!--we use data toggle tab for navigate this action-->
                                                    <a data-id="sungep@mail.com" data-toggle="tab" href="#chat">
                                                        <div class="contact-item">
                                                            <div class="pull-left">
                                                                <img src="img/user-thumb-mini.jpg" style="width: 32px;height: 32px;" class="contact-item-object">
                                                            </div>
                                                            <div class="contact-item-body">
                                                                <div title="idle" class="status"><i class="icofont-certificate color-orange"></i></div>
                                                                <p class="contact-item-heading bold">Sungep</p>
                                                                <p class="help-block"><small class="muted">UI designer</small></p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="contact-alt grd-white">
                                                    <!--we use data toggle tab for navigate this action-->
                                                    <a data-id="harab@mail.com" data-toggle="tab" href="#chat">
                                                        <div class="contact-item">
                                                            <div class="pull-left">
                                                                <img src="img/user-thumb-mini.jpg" style="width: 32px;height: 32px;" class="contact-item-object">
                                                            </div>
                                                            <div class="contact-item-body">
                                                                <div title="ofline" class="status"><i class="icofont-certificate color-silver-dark"></i></div>
                                                                <p class="contact-item-heading bold">Harab</p>
                                                                <p class="help-block"><small class="muted">Team Leader</small></p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="contact-alt grd-white active"> <!-- you can use this for active contact or your self status-->
                                                    <!--we use data toggle tab for navigate this action-->
                                                    <a data-id="janesmith@mail.com" data-toggle="tab" href="#chat">
                                                        <div class="contact-item">
                                                            <div class="pull-left">
                                                                <img src="img/user-thumb-mini.jpg" style="width: 32px;height: 32px;" class="contact-item-object">
                                                            </div>
                                                            <div class="contact-item-body">
                                                                <div title="online" class="status"><i class="icofont-certificate color-green"></i></div>
                                                                <p class="contact-item-heading bold">Jane smith</p>
                                                                <p class="help-block"><small class="muted">Data analyst</small></p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="contact-alt grd-white">
                                                    <!--we use data toggle tab for navigate this action-->
                                                    <a data-id="mahardika@mail.com" data-toggle="tab" href="#chat">
                                                        <div class="contact-item">
                                                            <div class="pull-left">
                                                                <img src="img/user-thumb-mini.jpg" style="width: 32px;height: 32px;" class="contact-item-object">
                                                            </div>
                                                            <div class="contact-item-body">
                                                                <div title="online" class="status"><i class="icofont-certificate color-green"></i></div>
                                                                <p class="contact-item-heading bold">Mahardika</p>
                                                                <p class="help-block"><small class="muted">PHP Developer</small></p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="contact-alt grd-white">
                                                    <!--we use data toggle tab for navigate this action-->
                                                    <a data-id="patul@mail.com" data-toggle="tab" href="#chat">
                                                        <div class="contact-item">
                                                            <div class="pull-left">
                                                                <img src="img/user-thumb-mini.jpg" style="width: 32px;height: 32px;" class="contact-item-object">
                                                            </div>
                                                            <div class="contact-item-body">
                                                                <div title="ofline" class="status"><i class="icofont-certificate color-silver-dark"></i></div>
                                                                <p class="contact-item-heading bold">Pathoel</p>
                                                                <p class="help-block"><small class="muted">UI designer</small></p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="contact-alt grd-white">
                                                    <!--we use data toggle tab for navigate this action-->
                                                    <a data-id="opytama@mail.com" data-toggle="tab" href="#chat">
                                                        <div class="contact-item">
                                                            <div class="pull-left">
                                                                <img src="img/user-thumb-mini.jpg" style="width: 32px;height: 32px;" class="contact-item-object">
                                                            </div>
                                                            <div class="contact-item-body">
                                                                <div title="ofline" class="status"><i class="icofont-certificate color-silver-dark"></i></div>
                                                                <p class="contact-item-heading bold">Opytama</p>
                                                                <p class="help-block"><small class="muted">PHP Developer</small></p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul><!--/contact-list-->
                                        </div>
                                    </div><!--/contact-->
                                    
                                    <!--alternative 1-->
                                    <div id="alt1" class="tab-pane fade">
                                        <div class="divider-content"><span></span></div> <!--divider-->
                                        
                                        <button class="btn btn-block btn-mini btn-primary">Add Action</button>
                                        <button class="btn btn-block btn-mini">Add Action</button>
                                        
                                        <div class="divider-content"><span></span></div> <!--divider-->
                                        
                                        <!-- side-task -->
                                        <div class="side-task">
                                            <div class="task active">
                                                <span class="task-header">
                                                    <img src="img/loader_16.gif"> 
                                                    <strong>Portofolio_W34GF.zip</strong>
                                                </span>
                                                <span class="task-desc">9.1 of 17MB - 243KB/sec - 1 min</span>
                                                <div title="" rel="tooltip" class="progress progress-striped active" data-original-title="40%">
                                                    <div style="width: 40%;" class="bar bar-success"></div>
                                                </div>
                                            </div>
                                            <div class="task fade in">
                                                <i title="success" class="icofont-ok-sign color-green"></i>
                                                <span class="task-desc">Paralax_bg_5448.jpg</span>
                                                <button class="close" data-dismiss="alert">×</button>
                                            </div>
                                            <div class="task fade in">
                                                <i title="success" class="icofont-ok-sign color-green"></i>
                                                <span class="task-desc">Widget_sidebar_W0089.psd</span>
                                                <button class="close" data-dismiss="alert">×</button>
                                            </div>
                                            <div class="task fade in">
                                                <i title="failed" class="icofont-remove-sign color-red"></i>
                                                <span class="task-desc">Widget_sidebar_W0089.psd</span>
                                                <button class="close" data-dismiss="alert">×</button>
                                            </div>
                                            <div class="task fade in">
                                                <i title="cancel" class="typicn-loop color-silver-dark"></i>
                                                <span class="task-desc">Widget_sidebar_W0089.psd</span>
                                                <button class="close" data-dismiss="alert">×</button>
                                            </div>
                                            <div class="task fade in">
                                                <i title="cancel" class="typicn-loop color-silver-dark"></i>
                                                <span class="task-desc">Widget_sidebar_W0089.psd</span>
                                                <button class="close" data-dismiss="alert">×</button>
                                            </div>
                                            <div class="task fade in">
                                                <i title="success" class="icofont-ok-sign color-green"></i>
                                                <span class="task-desc">Icons_bg_I98GH.jpg</span>
                                                <button class="close" data-dismiss="alert">×</button>
                                            </div>
                                            <div class="task fade in">
                                                <i title="failed" class="icofont-remove-sign color-red"></i>
                                                <span class="task-desc">Dashboard_3805.jpg</span>
                                                <button class="close" data-dismiss="alert">×</button>
                                            </div>
                                        </div><!-- /side-task -->
                                        
                                        <div class="divider-content"><span></span></div> <!--divider-->
                                        
                                    </div><!--/alternative 1-->
                                    
                                </div>
                            </div><!-- /sidebar-right-content -->
                        </div><!-- /sidebar-right -->
                    </aside><!-- /side-right -->
                </div><!-- /span side-right -->
                
            </div><!--/row-->
        </section>
<?php $this->endContent(); ?>