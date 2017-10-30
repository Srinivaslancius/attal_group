<?php include_once 'admin_includes/main_header.php'; ?>
<?php $getProjectsData = getAllDataWithActiveRecent('projects'); $i=1; ?>
     <div class="site-content">
        <div class="panel panel-default panel-table">
          <div class="panel-heading">
            <a href="add_projects.php" style="float:right">Add Projects</a>
            <h3 class="m-t-0 m-b-5">Projects</h3>            
          </div>
          <div class="panel-body">
            <div class="table-responsive">
              <table class="table table-striped table-bordered dataTable" id="table-1">
                <thead>
                  <tr>
                    <th>S.No</th>
                    <th>Project Name</th>
                    <th>Status</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <?php while ($row = $getProjectsData->fetch_assoc()) { ?>
                  <tr>
                     <td><?php echo $i;?></td>
                    <td><?php echo $row['project_name'];?></td>
                    <td><?php if ($row['status']==0) { echo "<span class='label label-outline-success check_active open_cursor' data-incId=".$row['id']." data-status=".$row['status']." data-tbname='banners'>Active</span>" ;} else { echo "<span class='label label-outline-info check_active open_cursor' data-status=".$row['status']." data-incId=".$row['id']." data-tbname='banners'>In Active</span>" ;} ?></td>
                    <td> <a href="edit_projects.php?bid=<?php echo $row['id']; ?>"> <i class="zmdi zmdi-edit"></i> &nbsp; </a> <a href="delete_projects.php?bid=<?php echo $row['id']; ?>"><i class="zmdi zmdi-delete zmdi-hc-fw" onclick="return confirm('Are you sure you want to delete?')"></i></a></td>
                  </tr>
                  <?php  $i++; } ?>                  
                </tbody>               
              </table>
            </div>
          </div>
        </div>   
       </div>
   <?php include_once 'admin_includes/footer.php'; ?>
   <script src="js/tables-datatables.min.js"></script>