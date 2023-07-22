<?php
    include_once('header.php');
?>
      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="index.php">Dashboard</a>
            </li>
   
          </ol>

          <!-- Page Content -->
         </div>
         <div class="container">
      <div class="card card-register mx-auto mt-5">
        <!-- <div class="card-header font-weight-bold display-4 text-center">Child Registration</div> -->
        <h2 class="card-header form-title">Event Page</h2>
        <div class="card-body">
           <form action="event_process.php" method="POST" enctype="multipart/form-data">  
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  </div>
             </div>
                  <div class="form-label-group ">
                    <input type="text" id="title" class="form-control" name="title"placeholder="title" required="required" autofocus="autofocus">
                    <label for="title">Event Title</label>
                  </div>

                </div>
                <div class="form-group">
                <div class="form-label-group ">
                    <input type="text" id="venue" class="form-control" placeholder="venue" name="venue" required="required" autofocus="autofocus">
                    <label for="venue">venue</label>
                  </div>

                </div>


                 
                <div class="form-group">
                  <div class="form-label-group">
                   <input type="datetime-local" id="date" class="form-control" name="date" required="required" >
                  </div>
                </div>
                


               <div class="form-group">
                  <div class="form-label-group">
                    <textarea  id="about" class="form-control" placeholder="Event Description" name="about" required="required" autofocus="autofocus"></textarea>
                  </div>
                </div>
               
              
              <div class="form-group">
              <div class="form-label-group ">
               <input class="form-control" type="file" accept="image/*" name="pro_img[]" id="pro_img" multiple="true
               " required="true">
                <label for="Profile Image">Add Photos</label>
              </div>
            </div>

            

        
            <!-- <a class="btn btn-primary btn-block" href="login.php">Register</a> -->

            <input type="submit" name="submit" value="Submit" class="btn btn-primary btn-block">
          </form>
          
        </div>
      </div>
    </div>

        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
       

      </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
<?php
    include_once('footer.php');
?>