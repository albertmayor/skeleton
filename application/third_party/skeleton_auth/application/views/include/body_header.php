<body>
 <div id="body_header">

<div class="navbar navbar-inverse navbar-fixed-top">
 <div class="navbar-inner">
   <div class="container">
    <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="brand" href="#"> <i class="icon-home"> </i><?php echo $body_header_app_name;?></a>
  
    <div class="nav-collapse collapse">
     
            
     <ul class="nav">
      
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo lang('managment');?> <b class="caret"></b></a>
          <ul class="dropdown-menu">
			  <?php if ($show_managment_menu): ?>
            <li><a href='<?php echo site_url('main/users')?>'><?php echo lang('users') . "users";?></a></li>
            <li><a href='<?php echo site_url('main/groups')?>'><?php echo lang('groups');?></a></li>
			  <?php endif; ?>
            <li><a href='<?php echo site_url('main/preferences')?>'><?php echo lang('preferences');?></a></li>                                            
          </ul>
      </li>
      

                                                                                              
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo lang('language');?> <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="<?=base_url()?>index.php/main/change_language/catalan"><?php echo lang('catalan');?></a></li>
            <li><a href="<?=base_url()?>index.php/main/change_language/spanish"><?php echo lang('spanish');?></a></li>
            <li><a href="<?=base_url()?>index.php/main/change_language/english"><?php echo lang('english');?></a></li>
          </ul>
      </li>
     </ul>               
   </div>
   <div class="pull-right navbar-text">
	   (<?php echo lang('language')." : ".lang($this->session->userdata('current_language'));?>)
     <img src="http://placehold.it/30x30">
      <a href="<?=base_url()?>index.php/main/user_info" style="color:grey"><?php echo $this->session->userdata('username');?></a>      
      <a href="<?=base_url()?>index.php/skeleton_auth/auth/logout"><?php echo lang('CloseSession');?></a>              
   </div>
  </div>
 </div>
</div>

	 
 </div>

<!-- END OF body_header. DO NOT CLOSE Body tag. Closed in body footer--> 