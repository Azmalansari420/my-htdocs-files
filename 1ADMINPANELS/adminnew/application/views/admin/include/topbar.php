 <?php 
 $this->crud->activity_record();
 chech_admin_login(); 
$user = $this->crud->selectDataByMultipleWhere('tbl_admin',array('id'=>$this->session->userdata("id"),));
if(empty($user))
  {
   redirect('admin/logout');
   die;
  }
$current_url = current_url();
$this->session->set_userdata('last_url', $current_url);
?>

<header id="header" class="app-header">
            <button type="button" class="navbar-toggle navbar-toggle-minify" data-click="sidebar-minify">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <div class="navbar-header">
               <a href="<?php echo base_url(); ?>" target="_blank" class="navbar-brand"><?php echo website_name; ?></a>
               <button type="button" class="navbar-toggle" data-click="sidebar-toggled">
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
               </button>
            </div>
            <ul class="navbar-nav navbar-right" style="align-items: end;">
               
               <!-- <li class="nav-item dropdown">
                  <a href="#" data-toggle="dropdown" data-display="static" class="nav-link">
                  <i class="far fa-bell nav-icon"></i>
                  <span class="nav-label">3</span>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-right dropdown-menu-lg pt-0 pb-0">
                     <li class="dropdown-header"><a href="#" class="dropdown-close">&times;</a>Today</li>
                     <li class="dropdown-message">
                        <a href="#">
                           <div class="icon"><i class="fab fa-apple bg-primary"></i></div>
                           <div class="info">
                              <h4 class="title">App Store <span class="time">Just now</span></h4>
                              <p class="desc">Your iOS application has been approved</p>
                           </div>
                        </a>
                     </li>
                  </ul>
               </li> -->

             
               <li class="nav-item dropdown">
                  <a href="#" data-toggle="dropdown" data-display="static" class="nav-link">
                  <span class="nav-img online">
                  <img src="<?php echo base_url(); ?>media/uploads/<?php echo $user[0]->image; ?>" alt />
                  </span>
                  <span class="d-none d-md-block"><?php echo $user[0]->first_name; ?> <b class="caret"></b></span>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right">
                     <a class="dropdown-item" href="<?php echo base_url('admin_con/edit_profile/edit'); ?>">Edit Profile</a>
                     <div class="dropdown-divider"></div>
                     <a class="dropdown-item" href="<?php echo base_url('admin/logout'); ?>">Log Out</a>
                  </div>
               </li>
            </ul>
        
         </header>