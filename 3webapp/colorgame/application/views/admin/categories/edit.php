<!DOCTYPE html>
<html lang="en">
   <title>Update <?=$page_title ?></title>
   <?php $this->load->view('admin/include/allcss') ?>
   <body>
      <div id="app" class="app app-header-fixed app-sidebar-fixed">
         <?php $this->load->view('admin/include/topbar') ?>
         <?php $this->load->view('admin/include/sidebar') ?>
         <div id="content" class="app-content">
            <h1 class="page-header add-header">Update <?=$page_title ?> </h1>
            <form class="row" method="post" enctype="multipart/form-data" action="#">
               <div class="col-lg-12">
                  <div class="card m-b-15">
                     <div class="row card-body">
                        <div class="col-4 form-group">
                           <label>Name </label>
                           <input type="text" class="form-control" name="name" value="<?=$EDITDATA[0]->name ?>">
                        </div>

                        <div class="col-4 form-group">
                           <label>Click to Upload Icon</label>
                           <input type="file" id="image-input" class="form-control" name="icon">
                           <input  type="hidden" class="form-control" name="oldicon" value="<?php echo $EDITDATA[0]->icon; ?>">
                           <?php
                           if(!empty($EDITDATA[0]->icon))
                              { ?>
                           <img id="image-preview" src="<?php echo base_url($upload_path); ?><?php echo $EDITDATA[0]->icon; ?>" alt="Image Preview" width="100px" >
                        <?php } ?>
                        </div>


                        <div class="col-4 form-group">
                           <label>Click to Upload Image</label>
                           <input type="file" id="image-input2" class="form-control" name="image">
                           <input  type="hidden" class="form-control" name="oldimage" value="<?php echo $EDITDATA[0]->image; ?>">
                           <?php
                           if(!empty($EDITDATA[0]->image))
                              { ?>
                           <img id="image-preview2" src="<?php echo base_url($upload_path); ?><?php echo $EDITDATA[0]->image; ?>" alt="Image Preview" width="100px" >
                        <?php } ?>
                        </div>

                        <div class="col-3 form-group m-b-0">
                           <label>Show Home</label>
                           <select class=" form-control" required name="show_home">
                              <option value="1" <?php if($EDITDATA[0]->show_home==1)echo 'selected'; ?>>Yes</option>
                              <option value="0" <?php if($EDITDATA[0]->show_home==0)echo 'selected'; ?>>No</option>
                           </select>
                        </div>

                        <div class="col-4 form-group m-b-0">
                           <label>Select Status</label>
                           <select class=" form-control" required name="status">
                              <option value="1"  <?php if($EDITDATA[0]->status==1)echo 'selected'; ?>>Show</option>
                              <option value="0" <?php if($EDITDATA[0]->status==0)echo 'selected'; ?>>Hide</option>
                           </select>
                        </div>
                        <div class="col-12 form-group mt-4">
                           <button type="submit" name="submit" class="btn btn-purple">Update <?=$page_title ?></button>
                        </div>
                     </div>
                  </div>
               </div>
               
            </form>
         </div>
         <a href="#" data-click="scroll-top" class="btn-scroll-top fade"><i class="fa fa-arrow-up"></i></a>
      </div>
      <?php $this->load->view('admin/include/theams') ?>
      <?php $this->load->view('admin/include/allscript') ?>
   </body>
</html>