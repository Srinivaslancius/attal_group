<?php include_once 'admin_includes/main_header.php'; ?>

<?php 
error_reporting(1);
$id = $_GET['bid'];
if (!isset($_POST['submit']))  {
            echo "";
} else  {
    //Save data into database

    //echo "<pre>";print_r($_POST);exit;
    $title = $_POST['title'];
    $status = $_POST['status'];
    $gallery_images = $_FILES['gallery_images']['name'];
    foreach($gallery_images as $key=>$value){
        $gallery_images1 = $_FILES['gallery_images']['name'][$key];
        $file_tmp = $_FILES["gallery_images"]["tmp_name"][$key];
        $file_destination = '../uploads/photo_gallery/' . $gallery_images1;
        move_uploaded_file($file_tmp, $file_destination);        
        $sql = "INSERT INTO photo_gallery ( `title`,`gallery_images`,`status`) VALUES ('$title','$gallery_images1','$status')";
        $result = $conn->query($sql);
    }
    if( $result == 1){
    echo "<script type='text/javascript'>window.location='photo_gallery.php?msg=success'</script>";
    } else {
       echo "<script type='text/javascript'>window.location='photo_gallery.php?msg=fail'</script>";
    }
}
?>
<div class="site-content">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="m-y-0">Photo Gallery</h3>
          </div>
          <div class="panel-body">
            <div class="row">
              <div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
                <form data-toggle="validator" method="post" enctype="multipart/form-data">
                  <?php $getPhotoGalleryData = getDataFromTables('photo_gallery','0','id',$id,$activeStatus=NULL,$activeTop=NULL);
                $getProducts = $getPhotoGalleryData->fetch_assoc();?>
                  <div class="form-group">
                    <label for="form-control-2" class="control-label">Title</label>
                    <input type="text" class="form-control" id="form-control-2" name="title" placeholder="Title" data-error="Please enter title." required value="<?php echo $getPhotoGalleryData['title']; ?>">
                    <div class="help-block with-errors"></div>
                  </div>
                  

                  <?php $getStatus = getDataFromTables('user_status',$status=NULL,$clause=NULL,$id=NULL,$activeStatus=NULL,$activeTop=NULL);?>
                  <div class="form-group">
                    <label for="form-control-3" class="control-label">Choose your status</label>
                    <select id="form-control-3" name="status" class="custom-select" data-error="This field is required." required>
                      <option value="" >Choose your Status</option> 
                      <?php while($row = $getStatus->fetch_assoc()) {  ?>
                          <option <?php if($row['id'] == $getProducts['status']) { echo "Selected"; } ?> value="<?php echo $row['id']; ?>"><?php echo $row['status']; ?></option>
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
   <script src="js/multi_image_upload.js"></script>
   <link rel="stylesheet" type="text/css" href="css/multi_image_upload.css">
   

