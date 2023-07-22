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
        <h2 class="card-header form-title">Child Registration</h2>
        <div class="card-body">
           <form action="child_process.php" method="POST" enctype="multipart/form-data">  
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  </div>
             </div>
                  <div class="form-label-group ">
                    <input type="text" id="First Name" class="form-control" placeholder="First name" name="fname" required="required" autofocus="autofocus">
                    <label for="First Name">First Name</label>
                  </div>
                </div>


               <div class="form-group">
                  <div class="form-label-group">
                    <input type="text" id="Last Name" class="form-control" placeholder="Last name" name="lname" required="required">
                    <label for="Last Name">Last name</label>
                  </div>
                </div>
               
              
            <div class="form-group">
              <div class="form-label-group">
                <input type="date" id="DOB" class="form-control" placeholder="Email address" name="dob" required="required">
                <label for="DOB">Date Of Birth</label>
              </div>
            </div>

            

             <div class="form-group">
              <div class="form-check-label">
               <h4> <label for="Hobby">Hobby:</label></h4>
             
            <div class="form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1" name="hby[]" value="Drawing">
               <label class="form-check-label" for="exampleCheck1">Drawing</label>
            </div>

            <div class="form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1"  name="hby[]" value="Play online games">
               <label class="form-check-label" for="exampleCheck1">Play online games</label>
            </div>

            <div class="form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1" name="hby[]" value="Cricket">
               <label class="form-check-label" for="exampleCheck1">Cricket</label>
            </div>

            <div class="form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1"  name="hby[]" value="Chess">
               <label class="form-check-label" for="exampleCheck1">Chess</label>
            </div>

            <div class="form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1" name="hby[]" value="Others">
               <label class="form-check-label" for="exampleCheck1">Others</label>
            </div>


             </div>
            </div>

            <div class="form-group">
              <div class="form-check-label">
                <h4><label for="Hobby">Gender:</label></h4>

             <div class="form-check">
              <input type="radio" class="form-check-input" id="exampleCheck1" name="Gender"  value="Male">
               <label class="form-check-label" for="exampleCheck1" >Male</label>
            </div>

             <div class="form-check">
              <input type="radio" class="form-check-input" id="exampleCheck1" name="Gender"  value="Female">
               <label class="form-check-label" for="exampleCheck1" >Female</label>
            </div>

             <div class="form-check">
              <input type="radio" class="form-check-input" id="exampleCheck1" name="Gender"  value="Other">
               <label class="form-check-label" for="exampleCheck1" >Other</label>
            </div>

              </div>
            </div>


      
            
             <div class="form-group">
              <div class="form-label-group">
                <input type="text" id="About Child" class="form-control" placeholder="Email address" name="aboutc" required="required">
                <label for="About Child">About Child</label>
              </div>
            </div>

              <div class="form-group">
              <div class="form-label-group ">
               <input class="form-control" type="file" accept="image/*" name="pro_img" id="pro_img" name="pro_img">
                <label for="Profile Image">Profile Image</label>
              </div>
            </div>

            

        
            <!-- <a class="btn btn-primary btn-block" href="login.php">Register</a> -->

            <input type="submit" name="submit" value="Register" class="btn btn-primary btn-block">
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

   <?php
    include_once('footer.php');
?>