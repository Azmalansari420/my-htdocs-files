<?php
$currentURL = current_url();
$sitesetting = $this->crud->fetchdatabyid('1','site_setting');
?>
<sidebar id="sidebar" class="app-sidebar">
   <div data-scrollbar="true" data-height="100%">
      <ul class="nav">
         <li class="nav-profile">
            <div class="profile-img11 text-center">
               <img src="<?php echo base_url(); ?>media/uploads/site_setting/<?php echo $sitesetting[0]->logo; ?>" alt="<?=website_name ?>" style="width: 50%;">
            </div>
           
         </li>
         
         
         <li class="nav-divider"></li>
         <li class="nav-header">Admin Panel</li>

         <li class="<?php if($currentURL==base_url('admin/dashboard')) echo 'active'; ?>">
            <a href="<?php echo base_url('admin/dashboard'); ?>">
            <span class="nav-icon"><i class="fa fa-home bg-black text-white"></i></span>
            <span class="nav-text">Dashboard</span>
            </a>
         </li>

         <li class="<?php if($currentURL==base_url('admin_con/site_setting/edit/1')) echo 'active'; ?>">
            <a href="<?php echo base_url('admin_con/site_setting/edit/1'); ?>">
               <span class="nav-icon"><i class="fa fa-cog bg-black text-white"></i></span>
               <span class="nav-text">Site Setting</span>
            </a>
         </li>

         <li class="<?php if($currentURL==base_url('admin_con/slider/listing')) echo 'active'; ?>">
            <a href="<?php echo base_url('admin_con/slider/listing');?>">
               <span class="nav-icon"><i class="fa fa-sliders-h bg-black text-white"></i></span>
               <span class="nav-text">Slider</span>
            </a>
         </li>

         <li class="nav-divider"></li>
         <li class="nav-header">Sub Admin</li>

         <li class="<?php if($currentURL==base_url('admin_con/role/listing')) echo 'active'; ?>">
            <a href="<?php echo base_url('admin_con/role/listing');?>">
               <span class="nav-icon"><i class="fa fa-wrench bg-black text-white"></i></span>
               <span class="nav-text">Create Role</span>
            </a>
         </li>

         <li class="<?php if($currentURL==base_url('admin_con/tbl_admin/listing')) echo 'active'; ?>">
            <a href="<?php echo base_url('admin_con/tbl_admin/listing');?>">
               <span class="nav-icon"><i class="fa fa-user-astronaut bg-black text-white"></i></span>
               <span class="nav-text">Assign Role</span>
            </a>
         </li>

         <li class="<?php if($currentURL==base_url('admin_con/users/listing')) echo 'active'; ?>">
            <a href="<?php echo base_url('admin_con/users/listing');?>">
               <span class="nav-icon"><i class="fa fa-user-astronaut bg-black text-white"></i></span>
               <span class="nav-text">Users</span>
            </a>
         </li>



         <li class="nav-divider"></li>
         <li class="nav-header">Orders</li>

         <li class="<?php if($currentURL==base_url('admin_con/finalorder/listing')) echo 'active'; ?>">
            <a href="<?php echo base_url('admin_con/finalorder/listing');?>">
               <span class="nav-icon"><i class="fa fa-shopping-bag bg-black text-white"></i></span>
               <span class="nav-text">Today Orders</span>
            </a>
         </li>

         <li class="<?php if($currentURL==base_url('admin_con/unreadorder/listing')) echo 'active'; ?>">
            <a href="<?php echo base_url('admin_con/unreadorder/listing');?>">
               <span class="nav-icon"><i class="fa fa-shopping-bag bg-black text-white"></i></span>
               <span class="nav-text">Un-Read Orders</span>
            </a>
         </li>


         <li class="<?php if($currentURL==base_url('admin_con/allorder/listing')) echo 'active'; ?>">
            <a href="<?php echo base_url('admin_con/allorder/listing');?>">
               <span class="nav-icon"><i class="fa fa-shopping-bag bg-black text-white"></i></span>
               <span class="nav-text">All Orders</span>
            </a>
         </li>

         <li class="nav-divider"></li>
         <li class="nav-header">Product</li>
                  
         <li class="<?php if($currentURL==base_url('admin_con/categories/listing')) echo 'active'; ?>">
            <a href="<?php echo base_url('admin_con/categories/listing');?>">
               <span class="nav-icon"><i class="fa fa-bars bg-black text-white"></i></span>
               <span class="nav-text">Categories</span>
            </a>
         </li>
         <li class="<?php if($currentURL==base_url('admin_con/product/listing')) echo 'active'; ?>">
            <a href="<?php echo base_url('admin_con/product/listing');?>">
               <span class="nav-icon"><i class="fa fa-suitcase-rolling bg-black text-white"></i></span>
               <span class="nav-text">Product</span>
            </a>
         </li>
         
         <li class="<?php if($currentURL==base_url('admin_con/color/listing')) echo 'active'; ?>">
            <a href="<?php echo base_url('admin_con/color/listing');?>">
               <span class="nav-icon"><i class="fa fa-rainbow bg-black text-white"></i></span>
               <span class="nav-text">Color</span>
            </a>
         </li>

         <li class="<?php if($currentURL==base_url('admin_con/size/listing')) echo 'active'; ?>">
            <a href="<?php echo base_url('admin_con/size/listing');?>">
               <span class="nav-icon"><i class="fa fa-signal bg-black text-white"></i></span>
               <span class="nav-text">Size</span>
            </a>
         </li>

         <li class="<?php if($currentURL==base_url('admin_con/coupen_code/listing')) echo 'active'; ?>">
            <a href="<?php echo base_url('admin_con/coupen_code/listing');?>">
               <span class="nav-icon"><i class="fa fa-gift bg-black text-white"></i></span>
               <span class="nav-text">Coupon Code</span>
            </a>
         </li>
         <li class="<?php if($currentURL==base_url('admin_con/notification/listing')) echo 'active'; ?>">
            <a href="<?php echo base_url('admin_con/notification/listing');?>">
               <span class="nav-icon"><i class="fa fa-bell bg-black text-white"></i></span>
               <span class="nav-text">Notification</span>
            </a>
         </li>

         <!-- <li class="<?php if($currentURL==base_url('admin_con/pricerange/listing')) echo 'active'; ?>">
            <a href="<?php echo base_url('admin_con/pricerange/listing');?>">
               <span class="nav-icon"><i class="fa fa-money-bill bg-black text-white"></i></span>
               <span class="nav-text">Price Range</span>
            </a>
         </li> -->


         

         

         <!-- <li class="has-sub">
            <a href="#">
            <span class="nav-icon"><i class="fa fa-cog bg-black text-white"></i></span>
            <span class="nav-text">Forms</span>
            <span class="nav-caret"><b class="caret"></b></span>
            </a>
            <ul class="nav-submenu">
               <li class="active"><a href="add.php"><span class="nav-text">Add</span></a></li>
               <li><a href="list.php"><span class="nav-text">Table</span></a></li>
            </ul>
         </li> -->

         
       
         <li class="nav-divider"></li>
         <li class="<?php if($currentURL==base_url('admin_con/contact/listing')) echo 'active'; ?>">
            <a href="<?php echo base_url('admin_con/contact/listing');?>">
               <span class="nav-icon"><i class="fa fa-envelope bg-black text-white"></i></span>
               <span class="nav-text">App Enquiry</span>
            </a>
         </li>
         <li class="">
            <a href="<?php echo base_url('admin/logout');?>">
               <span class="nav-icon"><i class="fa fa-sign-out-alt bg-gradient-red text-white"></i></span>
               <span class="nav-text">Logout </span>
            </a>
         </li>
         <li class="nav-copyright">&copy; <?=date('Y'); ?> <?=website_name ?>. All Right Reserved</li>
      </ul>
   </div>
</sidebar>