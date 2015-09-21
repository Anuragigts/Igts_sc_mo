<header class="topnavbar-wrapper">
         <!-- START Top Navbar-->
         <nav role="navigation" class="navbar topnavbar">
            <!-- START navbar header-->
            <div class="navbar-header">
                <div class="row">
                    <div class="col-xs-2">
                        <a href="<?php echo base_url()?>dashboard" class="navbar-brand" title="Home">
                            <div class="">
                               <img src="<?php echo $this->config->item('assets_url') ?>app/img/mo.png" alt="App Logo" class="img-responsive">
                            </div>
                         </a>
                    </div>
                    <div class="col-xs-8">
                         <ul class="nav navbar-nav">
                            <li>
                                <a href="<?php echo base_url()?>dashboard" style="color: #fff;">
                                   <b><?php echo $this->session->userdata('user_type');?> [ <?php echo $this->session->userdata('first_name') ;?> <?php echo $this->session->userdata('middle_name') ;?> <?php echo $this->session->userdata('last_name') ;?> ]</b>
                               </a>
                            </li>
                         </ul>
                    </div>
                    <div class="col-xs-2 pull-right">
                        <ul class="nav navbar-nav">
                            <li>
                                <a href="<?= base_url();?>dashboard/logout" title="Logout" style="color: #117391;">
                                    <em class="fa fa-sign-out fa-2x"></em>
                                 </a>
                            </li>
                        </ul>
                    </div>
                </div>
               
            </div>
            <!-- END navbar header-->
           
         </nav>
         <!-- END Top Navbar-->
      </header>