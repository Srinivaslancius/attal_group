<?php include_once 'admin_includes/main_header.php'; ?>

<?php  if (!isset($_POST['submit']))  {
          //If fail
          echo "fail";
        } else  {
            //If success
            $project_name = $_POST['project_name'];
            $status = $_POST['status'];
            $sql = "INSERT INTO `projects` (`project_name`,`status`) VALUES ('$project_name','$status')";
            if($conn->query($sql) === TRUE){
               echo "<script type='text/javascript'>window.location='projects.php?msg=success'</script>";
            } else {
               echo "<script type='text/javascript'>window.location='projects.php?msg=fail'</script>";
            }
                
        }
?>
		<div class="site-content">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="m-y-0">Projects</h3>
          </div>
          <div class="panel-body">            
            <div class="row">
              <div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
                <form data-toggle="validator" method="post" enctype="multipart/form-data">
                  <div class="form-group">
                    <label for="form-control-2" class="control-label">Project Name</label>
                    <input type="text" class="form-control" id="form-control-2" name="project_name" placeholder="Project Name" data-error="Please enter Project Name." required>
                    <div class="help-block with-errors"></div>
                  </div>
	
				          <?php $getStatus = getDataFromTables('user_status',$status=NULL,$clause=NULL,$id=NULL,$activeStatus=NULL,$activeTop=NULL);?>
                  <div class="form-group">
                    <label for="form-control-3" class="control-label">Choose your status</label>
                    <select id="form-control-3" name="status" class="custom-select" data-error="This field is required." required>
                      <option value="">Select Status</option>
                      <?php while($row = $getStatus->fetch_assoc()) {  ?>
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
      <script src="//cdn.ckeditor.com/4.7.0/full/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'description' ); 
</script>

      
       

      
      

      






