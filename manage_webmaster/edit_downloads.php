<?php include_once 'admin_includes/main_header.php'; ?>
<?php
$id = $_GET['did'];
 if (!isset($_POST['submit']))  {
            echo "fail";
    } else  {
            $category_id = $_POST['category_id'];
            $username = $_POST['user_name'];
            $lkp_location_id = $_POST['lkp_location_id'];
            $description = $_POST['description'];

        if($_FILES["fileToUpload"]["name"]!='') {
              $fileToUpload = $_FILES["fileToUpload"]["name"];
              $target_dir = "../uploads/downloads_pdf_images/";
              $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
              $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
              $getImgUnlink = getImageUnlink('pdf_image','downloads','id',$id,$target_dir);
                //Send parameters for img val,tablename,clause,id,imgpath for image ubnlink from folder
              if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                    $sql = "UPDATE downloads SET category_id = '$category_id', user_name = '$user_name',lkp_location_id='$lkp_location_id', description='$description',pdf_image='$fileToUpload',status='$status' WHERE id = '$id' ";
                    if($conn->query($sql) === TRUE){
                       echo "<script type='text/javascript'>window.location='downloads.php?msg=success'</script>";
                    } else {
                       echo "<script type='text/javascript'>window.location='downloads.php?msg=fail'</script>";
                    }
                    //echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
                } else {
                    echo "Sorry, there was an error uploading your file.";
                }
            }  else {
                $sql = "UPDATE downloads SET category_id = '$category_id', user_name = '$user_name',lkp_location_id='$lkp_location_id', description='$description',status='$status' WHERE id = '$id' ";
                if($conn->query($sql) === TRUE){
                   echo "<script type='text/javascript'>window.location='downloads.php?msg=success'</script>";
                } else {
                   echo "<script type='text/javascript'>window.location='downloads.php?msg=fail'</script>";
                }
            }
      }
?>
<?php $getAllDownloadData = getDataFromTables('downloads',$status=NULL,'id',$id,$activeStatus=NULL,$activeTop=NULL);
$getDownloadData = $getAllDownloadData->fetch_assoc();

$getCategories = getDataFromTables('categories','0',$clause=NULL,$id=NULL,$activeStatus=NULL,$activeTop=NULL);

$getAllLocations = getDataFromTables('lkp_locations','0',$clause=NULL,$id=NULL,$activeStatus=NULL,$activeTop=NULL);
 ?>
<div class="site-content">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="m-y-0">Sub Categories</h3>
          </div>
          <div class="panel-body">            
            <div class="row">
              <div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
                <form data-toggle="validator" method="post" enctype="multipart/form-data">
                  <div class="form-group">
                    <label for="form-control-3" class="control-label">Choose your Category</label>
                    <select id="form-control-3" name="category_id" class="custom-select" data-error="This field is required." required>
                      <option value="">Select Category</option>
                      <?php while($row = $getCategories->fetch_assoc()) {  ?>
                        <option value="<?php echo $row['id']; ?>" <?php if($row['id'] == $getDownloadData['category_id']) { echo "selected=selected"; }?> ><?php echo $row['category_name']; ?></option>
                    <?php } ?>
                   </select>
                    <div class="help-block with-errors"></div>
                  </div>
                  <div class="form-group">
                    <label for="form-control-2" class="control-label">Username</label>
                    <input type="text" class="form-control" id="form-control-2" name="user_name" required value="<?php echo $getDownloadData['user_name'];?>">
                    <div class="help-block with-errors"></div>
                  </div>
                  <div class="form-group">
                    <label for="form-control-3" class="control-label">Choose your Location</label>
                    <select id="form-control-3" name="category_id" class="custom-select" data-error="This field is required." required>
                      <option value="">Select Location</option>
                      <?php while($row = $getAllLocations->fetch_assoc()) {  ?>
                        <option value="<?php echo $row['id']; ?>" <?php if($row['id'] == $getDownloadData['lkp_location_id']) { echo "selected=selected"; }?> ><?php echo $row['location_name']; ?></option>
                    <?php } ?>
                   </select>
                    <div class="help-block with-errors"></div>
                  </div>
                  <div class="form-group">
                    <label for="form-control-4" class="control-label">Pdf Image</label>
                    <img src="<?php echo $base_url . 'uploads/downloads_pdf_images/'.$getDownloadData['pdf_image'] ?>"  id="output" height="100" width="100"/>
                    <label class="btn btn-default file-upload-btn">
                        Choose file...
                        <input id="form-control-22" class="file-upload-input" type="file" accept=".pdf,.doc" name="fileToUpload" id="fileToUpload"  onchange="loadFile(event)"  multiple="multiple" >
                      </label>
                  </div>
                  <?php $getStatus = getDataFromTables('user_status',$status=NULL,$clause=NULL,$id=NULL,$activeStatus=NULL,$activeTop=NULL);?>
                  <div class="form-group">
                    <label for="form-control-3" class="control-label">Choose your status</label>
                    <select id="form-control-3" name="status" class="custom-select" data-error="This field is required." required>
                      <option value="">Select Status</option>
                      <?php while($row = $getStatus->fetch_assoc()) {  ?>
                          <option <?php if($row['id'] == $getDownloadData['status']) { echo "Selected"; } ?> value="<?php echo $row['id']; ?>"><?php echo $row['status']; ?></option>
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

