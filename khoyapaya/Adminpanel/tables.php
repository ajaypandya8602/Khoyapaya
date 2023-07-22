<?php
    include_once('header.php');
?>
      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Tables</li>
          </ol>

          <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
             Child Data</div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>First Name</th>
                      <th>Last Name</th>
                      <th>DOB</th>
                      <th>Age</th>
                      <th>Hobby</th>
                      <th>Gender</th>
                      <th>About Child</th>
                    </tr>
                  </thead>
                  
                  <?php  
                    $con=mysqli_connect('localhost','root','','khoyapaya');
                    $query=mysqli_query($con,"select * from add_child");

                    while($row=mysqli_fetch_array($query))
                    {
                      echo "<tbody>";

                      echo "<tr><td>";
                      echo $row['Fname'];
                      echo "</td>";

                      echo "<td>";
                      echo $row['Lname'];
                      echo "</td>";

                      echo "<td>";
                      echo $row['DOB'];
                      echo "</td>";

                      echo "<td>";
                      echo $row['Age'];
                      echo "</td>";

                      echo "<td>";
                      echo $row['Hobby'];
                      echo "</td>";

                      echo "<td>";
                      echo $row['Gender'];
                      echo "</td>";

                      echo "<td>";
                      echo $row['About_Child'];
                      echo "</td></tr>";

                      echo "</tbody>";

                    }

                  ?>


                </table>
              </div>
            </div>
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
          </div>

          <p class="small text-center text-muted my-5">
            <em>More table examples coming soon...</em>
          </p>

        </div>
        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
        <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright © Your Website 2018</span>
            </div>
          </div>
        </footer>

      </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

<?php
    include_once('footer.php');
?>