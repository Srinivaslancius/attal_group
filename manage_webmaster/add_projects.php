<?php include_once 'admin_includes/main_header.php'; ?>

<?php 
if (!isset($_POST['submit']))  {
            echo "";
} else  {
    //Save data into database
    $project_name = $_POST['project_name'];
    $gallery_id = $_POST['gallery_id'];
    $location_id = $_POST['location_id'];
    $category_id = $_POST['category_id'];
    $sub_category_id = $_POST['sub_category_id'];
    $sub_sub_category_id = $_POST['sub_sub_category_id'];
    $fileToUpload = $_FILES["fileToUpload"]["name"];
    $description = $_POST['description'];
    $specification = $_POST['specification'];
    $gallery_images = $_FILES['gallery_images']['name'];
    $status = $_POST['status'];
    //save product images into product_images table    
    
   foreach($gallery_images as $key=>$value){
        $gallery_images1 = uniqid().$_FILES['gallery_images']['name'][$key];
        $file_tmp = $_FILES["gallery_images"]["tmp_name"][$key];
        $file_destination = '../uploads/projects_images/' . $gallery_images1;
        move_uploaded_file($file_tmp, $file_destination);        
       $sql = "INSERT INTO projects (`project_name`, `gallery_id`,`images`,`location_id`, `category_id`,`sub_category_id`,`sub_sub_category_id`,`description`,`specification`,`status`) VALUES ('$project_name', '$gallery_id','$gallery_images1','$location_id','$category_id','$sub_category_id', '$sub_sub_category_id','$description', '$specification','$status')";
      $result = $conn->query($sql);
  }
  if( $result == 1){
      echo "<script type='text/javascript'>window.location='projects.php?msg=success'</script>";
  } else {
     echo "<script type='text/javascript'>window.location='projects.php?msg=fail'</script>";
  }
}
?>
    <div class="site-content">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="m-y-0">Products</h3>
          </div>
          <div class="panel-body">
            <div class="row">
              <div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
                <form data-toggle="validator" method="post" enctype="multipart/form-data">

                  <?php $getCategories = getDataFromTables('categories','0',$clause=NULL,$id=NULL,$activeStatus=NULL,$activeTop=NULL);?>
                  <?php $getLocations= getDataFromTables('lkp_locations','0',$clause=NULL,$id=NULL,$activeStatus=NULL,$activeTop=NULL);?>
                  <div class="form-group">
                    <label for="form-control-3" class="control-label">Choose your Category</label>
                    <select id="form-control-3" name="category_id" class="custom-select" data-error="This field is required." required onChange="getSubCategories(this.value);">
                      <option value="">Select Category</option>
                      <?php while($row = $getCategories->fetch_assoc()) {  ?>
                        <option value="<?php echo $row['id']; ?>"><?php echo $row['category_name']; ?></option>
                      <?php } ?>
                   </select>
                    <div class="help-block with-errors"></div>
                  </div>

                  <div class="form-group">
                    <label for="form-control-3" class="control-label">Select Sub Category</label>
                    <select id="sub_category_id" name="sub_category_id" class="custom-select" data-error="This field is required." required onChange="getSubSubCategories(this.value);">
                      <option value="">Select Sub Category</option>
                   </select>
                    <div class="help-block with-errors"></div>
                  </div>

                  <div class="form-group">
                    <label for="form-control-3" class="control-label">Select Sub Sub Category</label>
                    <select id="sub_sub_category_id" name="sub_sub_category_id" class="custom-select" data-error="This field is required." required >
                      <option value="">Select Sub Sub Category</option>
                   </select>
                    <div class="help-block with-errors"></div>
                  </div>
                  <div class="form-group">
                    <label for="form-control-3" class="control-label">Choose Location</label>
                    <select id="form-control-3" name="location_id" class="custom-select" data-error="This field is required." required>
                      <option value="">Select Location</option>
                      <?php while($row1 = $getLocations->fetch_assoc()) {  ?>
                        <option value="<?php echo $row1['id']; ?>"><?php echo $row1['location_name']; ?></option>
                      <?php } ?>
                   </select>
                    <div class="help-block with-errors"></div>
                  </div>
                  <div class="form-group">
                    <label for="form-control-2" class="control-label">Project Name</label>
                    <input type="text" class="form-control" id="project_name" name="project_name" placeholder="Project Name" data-error="Please enter Project name." required>
                    <div class="help-block with-errors"></div>
                  </div>

                  <div class="form-group">
                    <label for="form-control-2" class="control-label">Description</label>
                    <textarea name="description" class="form-control" id="description" placeholder="Description" data-error="Please enter Description." required></textarea>
                    <div class="help-block with-errors"></div>
                  </div>

                  <div class="form-group">
                    <label for="form-control-2" class="control-label">Specifications</label>
                    <textarea name="specification" class="form-control" id="specification" placeholder="specification" data-error="Please enter Specifications." required></textarea>
                    <div class="help-block with-errors"></div>
                  </div>
                  <div class="form-group">
                    <label for="form-control-2" class="control-label">Galler Id</label>
                    <input type="text" class="form-control" id="form-control-2" name="gallery_id" placeholder="Galler Id" data-error="Please enter gallery id." required onkeypress="return isNumberKey(event)">
                    <div class="help-block with-errors"></div>
                  </div>
                  <div id="formdiv">                   
                        <div id="filediv"><input required name="gallery_images[]" accept="image/*" type="file" id="file" /></div><br/>               
                        <input type="button" id="add_more" class="upload" value="Add More Files"/>
                  </div>
                  <?php $getStatus = getDataFromTables('user_status',$status=NULL,$clause=NULL,$id=NULL,$activeStatus=NULL,$activeTop=NULL);?>
                  <div class="form-group">
                    <label for="form-control-3" class="control-label">Choose your status</label>
                    <select id="form-control-3" name="status" class="custom-select" data-error="This field is required." required>
                      <option value="">Select Status</option>
                      <?php while($row = $getStatus->fetch_assoc()) { ?>
                          <option value="<?php echo $row['id']; ?>"><?php echo $row['status']; ?></option>
                      <?php } ?>
                   </select>
                    <div class="help-block with-errors"></div>
                  </div>
                  <button type="submit" name="submit" value="Submit"  class="btn btn-primary btn-block">Submit</button>
                </form>
              </div>
            </div>
            <hr>
          </div>
        </div>
      </div>
      <?php include_once 'admin_includes/footer.php'; ?>
   <script src="js/tables-datatables.min.js"></script>
   <script src="js/multi_image_upload.js"></script>
   <link rel="stylesheet" type="text/css" href="css/multi_image_upload.css">
   <!-- Below script for ck editor -->
    <script src="//cdn.ckeditor.com/4.7.0/full/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'description' );
        CKEDITOR.replace( 'specification' );
    </script>
    <script type="text/javascript">
    function getSubCategories(val) {
        $.ajax({
        type: "POST",
        url: "get_sub_categories.php",
        data:'category_id='+val,
        success: function(data){
            $("#sub_category_id").html(data);
        }
        });
    }

    function getSubSubCategories(val) {
        $.ajax({
        type: "POST",
        url: "get_sub_sub_categories.php",
        data:'sub_category_id='+val,
        success: function(data){
            $("#sub_sub_category_id").html(data);
        }
        });
    }
    </script>